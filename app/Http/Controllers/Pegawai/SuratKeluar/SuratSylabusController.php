<?php

namespace App\Http\Controllers\Pegawai\SuratKeluar;

Use App\JenisSurat;
use App\PesertaDidik;
use App\RiwayatPendidikan;
use App\SuratKeluar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use PDF;

class SuratSylabusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $smasukView = SuratKeluar::orderBy('created_at', 'ASC')->get();
        $jenisSurat = JenisSurat::all();
        return view('pegawai.surat-keluar.k-sylabus.sylabus-home', compact('smasukView', 'jenisSurat'));
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

        $pegawai = RiwayatPendidikan::all();
        return view('pegawai.surat-keluar.k-sylabus.sylabus-tambah', compact('pegawai', 'value', 'kodeSurat'));
    }

    public function store(Request $request){
        $peserta = PesertaDidik::find($request->peserta_didik);

        $suratK = SuratKeluar::create([
            'user_id' => Auth::user()->id,
            'no_surat' => $request->no_surat,
            'kode_surat' => $request->kode_surat,
            'perihal' => $request->perihal,
            'nama_peserta' => $peserta->nama,
            'tempat' => $request->tempat,
            'tgl_keluar' => $request->tgl_keluar,
            'tgl_dicaat' => $request->tgl_dicatat,
            'created_by' => Auth::user()->nama_user,

        ]);


        return redirect()->route('sursy-home')->with('sukses','Data surat keluar berhasil ditambahkan.');
    }

    public function edit(Request $request){

        $suratM = SuratKeluar::find($request->id);

        return view('pegawai.surat-keluar.k-sylabus.sylabus-edit', compact('suratM'));
    }


    public function update(Request $request, $id){

        $suratM = SuratKeluar::find($id);
        //dd($pegawai);
        $suratM->update([
            'user_id' => Auth::user()->id,
            'no_surat' => $request->no_surat,
            'tgl_diterima' => $request->tgl_diterima,
            'tgl_dicatat' => $request->tgl_dicatat,
            'pengirim' => $request->pengirim,
            'penerima' => $request->penerima,
            'prihal' => $request->prihal,
            'updated_by' => Auth::user()->nama_user,
        ]);

        if (Input::has('upload_file_new')) {

            File::delete($suratM->upload_file);
            $file = str_replace(' ', '_', str_random(4) . '' . $request->file('upload_file_new')->getClientOriginalName());
            Input::file('upload_file_new')->move('images/file-surat-masuk/', $file);

            $suratM->update([
                'upload_file' => 'images/file-surat-masuk/' . $file,
            ]);
        }

        return redirect()->route('sursy-home')->with('edit', 'Data surat masuk berhasil diubah.'); //Lanjutkan dengan mengisi riwayat pendidikan.
    }

    public function destroy($id){

        $surM = SuratKeluar::find($id);
        $file = $surM->upload_file;
        File::delete($file);
        $surM->delete();

        return redirect()->route('sursy-home')->with('hapus', 'Data terpilih berhasil dihapus.');
    }

    public function print(Request $request){

        $data = SuratKeluar::find($request->id);
        $no = $data->no_surat;
        //dd($data);
        $pdf = PDF::setOptions(['font' => 'calibri', 'images' => true]);
        $pdf->loadView("pegawai.surat-keluar.k-sylabus.sylabus-print", compact('data'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream('surat_keputusan_penyusun_sylabus_'.$no);

//        return view('pegawai.surat-keluar.k-sylabus.sylabus-print');

    }
}
