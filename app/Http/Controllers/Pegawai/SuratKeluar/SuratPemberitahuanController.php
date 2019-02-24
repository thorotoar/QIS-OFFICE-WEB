<?php

namespace App\Http\Controllers\Pegawai\SuratKeluar;

use App\IsiSurat;
Use App\JenisSurat;
use App\KontenSurat;
use App\Pegawai;
use App\PesertaDidik;
use App\RiwayatPendidikan;
use App\SuratKeluar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use PDF;

class SuratPemberitahuanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $smasukView = SuratKeluar::orderBy('created_at', 'ASC')->get();
        $jenisSurat = JenisSurat::all();
        return view('pegawai.surat-keluar.k-pemberitahuan.k-home', compact('smasukView', 'jenisSurat'));
    }

    public function create(){
        $kode = 'QIS';
        // karna array dimulai dari 0 maka kita tambah di awal data kosong
        // bisa juga mulai dari "1"=>"I"
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = SuratKeluar::max('no_surat');
        $no = 1;

        if($noUrutAkhir) {
            $value =  sprintf("%03s", abs($noUrutAkhir + 1));
            $kodeSurat = '/' . $kode .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
        }
        else {
            $value = sprintf("%03s", $no);
            $kodeSurat = '/' . $kode .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
        }

        $peserta = PesertaDidik::all();
        $pegawai = RiwayatPendidikan::all();
        return view('pegawai.surat-keluar.k-pemberitahuan.k-tambah', compact('peserta', 'value', 'kodeSurat', 'pegawai'));
    }

    public function store(Request $request){
        $peserta = PesertaDidik::find($request->peserta_didik);
        $pegawai = Pegawai::find($request->instruktur_kelas);
//        $riwaPegawai = RiwayatPendidikan::where('pegawai_id', $pegawai->id);
        $jenisur = JenisSurat::find($request->id);

        //dd($jenisur->id);

        $suratK = SuratKeluar::create([
            'user_id' => Auth::user()->id,
            'jenis_id' => $jenisur->id,
            'no_surat' => $request->no_surat,
            'kode_surat' => $request->kode_surat,
            'perihal' => $request->perihal,
            'tempat' => $request->tempat,
            'tgl_keluar' => $request->tgl_keluar,
            'tgl_dicatat' => $request->tgl_dicatat,
            'created_by' => Auth::user()->nama_user,

        ]);

        if (Input::has('peserta_didik')) {
            //$user = Dokumen::find($request->id);
            $isiSurat = IsiSurat::create([
                'surat_keluar_id' => $suratK->id,
                'nama_peserta' => $peserta->nama,
                'hasil_evaluasi' => $request->hasil_evaluasi,
                'jumlah_program' => $request->jumlah_program,
                'instruktur' => $pegawai->nama,
                'created_by' => Auth::user()->nama_user,
            ]);


            foreach ($request['jenis_program'] as $index => $value) {
                KontenSurat::create([
                    'isi_id' => $isiSurat->id,
                    'jenis_program' => $value,
                    'lama_program' => $request['lama_program'][$index],
                    'created_by' => Auth::user()->nama_user,
                ]);
            }
        }


        return redirect()->route('surk-home')->with('sukses','Data surat keluar berhasil ditambahkan.');
    }


    public function update(Request $request, $id){

        $peserta = PesertaDidik::find($request->peserta_didik);
        $pegawai = Pegawai::find($request->instruktur_kelas);

        $sKeluar = SuratKeluar::find($id);
        $iKeluar = IsiSurat::where('surat_keluar_id', $sKeluar->id)->firstOrFail();
       KontenSurat::where('isi_id', $iKeluar->id)->delete(); //problem

//        dd($kKeluar->isi_id);

        $sKeluar->update([
            'user_id' => Auth::user()->id,
            'no_surat' => $request->no_surat,
            'kode_surat' => $request->kode_surat,
            'perihal' => $request->perihal,
            'tempat' => $request->tempat,
            'tgl_keluar' => $request->tgl_keluar,
            'tgl_dicatat' => $request->tgl_dicatat,
            'updated_by' => Auth::user()->nama_user,

        ]);

        if (Input::has('peserta_didik')) {
            $iKeluar->update([
                'nama_peserta' => $peserta->nama,
                'hasil_evaluasi' => $request->hasil_evaluasi,
                'jumlah_program' => $request->jumlah_program,
                'instruktur' => $pegawai->nama,
                'updated_by' => Auth::user()->nama_user,
            ]);


            if (input::has('jenis_programs')){
                foreach ($request['jenis_programs'] as $index => $value) {
                    KontenSurat::create([
                        'isi_id' => $iKeluar->id,
                        'jenis_program' => $value,
                        'lama_program' => $request['lama_programs'][$index],
                        'updated_by' => Auth::user()->nama_user,
                    ]);
                }
            }
        }

        return redirect()->route('surk-home')->with('edit', 'Data surat masuk berhasil diubah.'); //Lanjutkan dengan mengisi riwayat pendidikan.
    }

    public function destroy($id){

        $surM = SuratKeluar::find($id);
        $file = $surM->upload_file;
        File::delete($file);
        $surM->delete();

        return redirect()->route('surp-home')->with('hapus', 'Data terpilih berhasil dihapus.');
    }

    public function print(Request $request){

        $data = SuratKeluar::find($request->id);
        $no = $data->no_surat;
        //dd($data);
        $pdf = PDF::setOptions(['font' => 'calibri', 'images' => true]);
        $pdf->loadView("pegawai.surat-keluar.k-pemberitahuan.k-print", compact('data'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream('surat_pemberitahuan_'.$no.'.pdf');

//        return view('pegawai.surat-keluar.k-pemberitahuan.k-print');

    }

//    public function getVacancyReviewData($vacancy){
//        $vac_ids = '';
//        foreach ((array)$vacancy as $select) {
//            $vac_ids .= $select . ', ';
//        }
//        $vac_ids = explode(",", substr($vac_ids, 0, -2));
//        $vacancies = Vacancies::whereIn('id', $vac_ids)->get()->toArray();
//        $i = 0;
//        foreach ($vacancies as $row) {
//            if (substr(Cities::find($row['cities_id'])->name, 0, 2) == "Ko") {
//                $cities = substr(Cities::find($row['cities_id'])->name, 5);
//            } else {
//                $cities = substr(Cities::find($row['cities_id'])->name, 10);
//            }
//            $userAgency = User::findOrFail(Agencies::findOrFail($row['agency_id'])->user_id);
//            if ($userAgency->ava == "agency.png" || $userAgency->ava == "") {
//                $filename = asset('images/agency.png');
//            } else {
//                $filename = asset('storage/users/' . $userAgency->ava);
//            }
//            $city = array('city' => $cities);
//            $degrees = array('degrees' => Tingkatpend::findOrFail($row['tingkatpend_id'])->name);
//            $majors = array('majors' => Jurusanpend::findOrFail($row['jurusanpend_id'])->name);
//            $jobfunc = array('job_func' => FungsiKerja::findOrFail($row['fungsikerja_id'])->nama);
//            $industry = array('industry' => Industri::findOrFail($row['industry_id'])->nama);
//            $jobtype = array('job_type' => JobType::findOrFail($row['jobtype_id'])->name);
//            $joblevel = array('job_level' => JobLevel::findOrFail($row['joblevel_id'])->name);
//            $salary = array('salary' => Salaries::findOrFail($row['salary_id'])->name);
//            $ava['user'] = array('ava' => $filename, 'name' => $userAgency->name);
//            $update_at = array('updated_at' => Carbon::createFromFormat('Y-m-d H:i:s',
//                $row['updated_at'])->diffForHumans());
//            $vacancies[$i] = array_replace($ava, $vacancies[$i], $city, $degrees, $majors, $jobfunc, $industry,
//                $jobtype, $joblevel, $salary, $update_at);
//            $i = $i + 1;
//        }
//        return $vacancies;
//    }

}
