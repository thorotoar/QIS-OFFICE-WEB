<?php

namespace App\Http\Controllers\Pegawai;

use App\IsiSurat;
use App\Jabatan;
Use App\JenisSurat;
use App\KontenSurat;
use App\Lembaga;
use App\Pegawai;
use App\PesertaDidik;
use App\RiwayatPendidikan;
use App\SuratKeluar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use PDF;

class SuratKeluarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $keluarView = SuratKeluar::orderBy('created_at', 'ASC')->get();
        $jenisSurat = JenisSurat::all();
        return view('pegawai.surat-keluar.k-home', compact('keluarView', 'jenisSurat'));
    }

    public function create(Request $request){
        $jenis = JenisSurat::find($request->id);

        $peserta = PesertaDidik::all();
        $pegawai = RiwayatPendidikan::all();
        $lembaga = Lembaga::all();

        //segment
        // karna array dimulai dari 0 maka kita tambah di awal data kosong
        // bisa juga mulai dari "1"=>"I"
        $kode = 'QIS';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noUrutAkhir = SuratKeluar::max('no_surat');
        $no = 1;

        if($jenis->id == 1){
            if($noUrutAkhir) {
                $value =  sprintf("%03s", abs($noUrutAkhir + 1));
                $kodeSurat = '/' . $kode .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }
            else {
                $value = sprintf("%03s", $no);
                $kodeSurat = '/' . $kode .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }

            return view('pegawai.surat-keluar.k-pemberitahuan.k-tambah', compact('jenis', 'peserta', 'jenis', 'pegawai', 'value', 'kodeSurat'));
        }
        elseif ($jenis->id == 2){
            if($noUrutAkhir) {
                $value =  sprintf("%03s", abs($noUrutAkhir + 1));
                $kodeSurat = '/' . $kode .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }
            else {
                $value = sprintf("%03s", $no);
                $kodeSurat = '/' . $kode .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }

            return view('pegawai.surat-keluar.k-penagihan.penagihan-tambah', compact('jenis', 'peserta', 'pegawai', 'value', 'kodeSurat'));
        }
        elseif ($jenis->id == 3){
            if($noUrutAkhir) {
                $value =  sprintf("%03s", abs($noUrutAkhir + 1));
                $kodeSurat = '/' . $kode .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }
            else {
                $value = sprintf("%03s", $no);
                $kodeSurat = '/' . $kode .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }

            return view('pegawai.surat-keluar.k-peringatan.peringatan-tambah', compact('jenis', 'peserta', 'pegawai', 'value', 'kodeSurat'));
        }
        elseif ($jenis->id == 4){
            $kodex = 'PNG';

            if($noUrutAkhir) {
                $value =  sprintf("%03s", abs($noUrutAkhir + 1));
                $kodeSurat = '/' . $kodex . '/' . $kode .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }
            else {
                $value = sprintf("%03s", $no);
                $kodeSurat = '/' . $kodex . '/' . $kode .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }

            return view('pegawai.surat-keluar.k-pengajuan.pengajuan-tambah', compact('jenis', 'peserta', 'pegawai', 'value', 'kodeSurat'));
        }
        elseif ($jenis->id == 5){
            $kodex = 'MNG';

            if($noUrutAkhir) {
                $value =  sprintf("%03s", abs($noUrutAkhir + 1));
                $kodeSurat = '/' . $kode .'/' . $kodex . '/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }
            else {
                $value = sprintf("%03s", $no);
                $kodeSurat = '/' . $kode .'/' . $kodex . '/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }

            return view('pegawai.surat-keluar.k-pengangkatan.pengangkatan-tambah', compact('jenis', 'peserta', 'pegawai', 'lembaga', 'value', 'kodeSurat'));
        }
        elseif ($jenis->id == 6){
            $kodex = 'SK';

            if($noUrutAkhir) {
                $value =  sprintf("%03s", abs($noUrutAkhir + 1));
                $kodeSurat = '/' . $kodex . '/' . $kode .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }
            else {
                $value = sprintf("%03s", $no);
                $kodeSurat = '/' . $kodex . '/' . $kode .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }

            return view('pegawai.surat-keluar.k-pengalaman.pengalaman-tambah', compact('jenis', 'peserta', 'pegawai', 'lembaga', 'value', 'kodeSurat'));
        }
        elseif ($jenis->id == 7){
            $kodex = 'INS';

            if($noUrutAkhir) {
                $value =  sprintf("%03s", abs($noUrutAkhir + 1));
                $kodeSurat = '/' . $kode .'/' . $kodex . '/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }
            else {
                $value = sprintf("%03s", $no);
                $kodeSurat = '/' . $kode .'/' . $kodex . '/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }

            return view('pegawai.surat-keluar.k-keputusan.keputusan-tambah', compact('jenis', 'peserta', 'pegawai', 'value', 'kodeSurat'));
        }
        elseif ($jenis->id == 8){
            $kodex = 'PSIL';

            if($noUrutAkhir) {
                $value =  sprintf("%03s", abs($noUrutAkhir + 1));
                $kodeSurat = '/' . $kode .'/' . $kodex . '/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }
            else {
                $value = sprintf("%03s", $no);
                $kodeSurat = '/' . $kode .'/' . $kodex . '/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }

            return view('pegawai.surat-keluar.k-sylabus.sylabus-tambah', compact('jenis', 'peserta', 'pegawai', 'value', 'kodeSurat'));
        }
        elseif ($jenis->id == 9){
            $kodex = 'PSIL';

            if($noUrutAkhir) {
                $value =  sprintf("%03s", abs($noUrutAkhir + 1));
                $kodeSurat = '/' . $kode .'/' . $kodex . '/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }
            else {
                $value = sprintf("%03s", $no);
                $kodeSurat = '/' . $kode .'/' . $kodex . '/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }

            return view('pegawai.surat-keluar.k-rpp.rpp-tambah', compact('jenis', 'peserta', 'pegawai', 'value', 'kodeSurat'));
        }
        else{
            if($noUrutAkhir) {
                $value =  sprintf("%03s", abs($noUrutAkhir + 1));
                $kodeSurat = '/' . $kode .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }
            else {
                $value = sprintf("%03s", $no);
                $kodeSurat = '/' . $kode .'/' . $bulanRomawi[date('n')] .'/' . date('Y');
            }

            return view('pegawai.surat-keluar.k-lain.lain-tambah', compact('jenis', 'peserta', 'pegawai', 'value', 'kodeSurat'));
        }
    }

    public function edit(Request $request){
        $sKeluar = SuratKeluar::find($request->id);
        $iKeluar = IsiSurat::where('surat_keluar_id', $sKeluar->id)->firstOrFail();
        $kKeluar = KontenSurat::where('isi_id', $iKeluar->id)->get()->toArray();

//        dd($kKeluar['hasil_evaluasi']);

        if($sKeluar->jenis_id == 1){
            return view('pegawai.surat-keluar.k-pemberitahuan.k-edit', compact('jenis', 'kKeluar', 'iKeluar', 'sKeluar'));
        }
        elseif ($sKeluar->jenis_id == 2){
            return view('pegawai.surat-keluar.k-penagihan.penagihan-edit', compact('jenis', 'sKeluar', 'iKeluar', 'kKeluar'));
        }
        elseif ($sKeluar->jenis_id == 3){
            return view('pegawai.surat-keluar.k-peringatan.peringatan-edit', compact('jenis', 'sKeluar', 'iKeluar', 'kKeluar'));
        }
        elseif ($sKeluar->jenis_id == 4){
            return view('pegawai.surat-keluar.k-pengajuan.pengajuan-edit', compact('jenis', 'sKeluar', 'iKeluar', 'kKeluar'));
        }
        elseif ($sKeluar->jenis_id == 5){
            return view('pegawai.surat-keluar.k-pengangkatan.pengangkatan-edit', compact('jenis', 'sKeluar', 'iKeluar', 'kKeluar'));
        }
        elseif ($sKeluar->jenis_id == 6){
            return view('pegawai.surat-keluar.k-pengalaman.pengalaman-edit', compact('jenis', 'sKeluar', 'iKeluar', 'kKeluar'));
        }
        elseif ($sKeluar->jenis_id == 7){
            return view('pegawai.surat-keluar.k-keputusan.keputusan-edit', compact('jenis', 'sKeluar', 'iKeluar', 'kKeluar'));
        }
        elseif ($sKeluar->jenis_id == 8){
            return view('pegawai.surat-keluar.k-sylabus.sylabus-edit', compact('jenis', 'sKeluar', 'iKeluar', 'kKeluar'));
        }
        elseif ($sKeluar->jenis_id == 9){
            return view('pegawai.surat-keluar.k-rpp.rpp-edit', compact('jenis', 'sKeluar', 'iKeluar', 'kKeluar'));
        }
        else{
            return view('pegawai.surat-keluar.k-lain.lain-edit', compact('jenis', 'sKeluar', 'iKeluar', 'kKeluar'));
        }

    }

    public function store(Request $request){
        dd($request->all());
    }

    public function destroyKonten($id){

        $kKeluar = KontenSurat::find($id);
        $kKeluar->delete();

        return back();
    }
    
    public  function print(Request $request){
        $sKeluar = SuratKeluar::find($request->id);
        $iKeluar = IsiSurat::where('surat_keluar_id', $sKeluar->id)->firstOrFail();
        $kKeluar = KontenSurat::where('isi_id', $iKeluar->id)->get()->toArray();

        $no = $sKeluar->no_surat;
        //pdf
        $pdf = PDF::setOptions(['font' => 'calibri', 'images' => true]);
        $pdf->setPaper('A4', 'portrait');

        if($sKeluar->jenis_id == 1){
            $jabatan = Jabatan::where('nama_jabatan', 'instruktur')->firstOrFail();
            $pengajaran = Pegawai::where('jabatan_yayasan_id', $jabatan->id)->firstOrFail();

            $pdf->loadView("pegawai.surat-keluar.k-pemberitahuan.k-print", compact('sKeluar', 'iKeluar', 'kKeluar', 'pengajaran'));
            return $pdf->stream('surat_pemberitahuan_'.$no.'.pdf');
        }
        elseif ($sKeluar->jenis_id == 2){
            $total = $iKeluar->jumlah_peserta * $iKeluar->besar_biyaya;

            $pdf->loadView("pegawai.surat-keluar.k-penagihan.penagihan-print", compact('sKeluar', 'iKeluar', 'kKeluar', 'total'));
            return $pdf->stream('surat_penagihan_'.$no.'.pdf');
        }
        elseif ($sKeluar->jenis_id == 3){
            $jabatan = Jabatan::where('nama_jabatan', 'Manager Operasional')->firstOrFail();
            $manager = Pegawai::where('jabatan_id', $jabatan->id)->firstOrFail();

            $pdf->loadView("pegawai.surat-keluar.k-peringatan.peringatan-print", compact('sKeluar', 'iKeluar', 'kKeluar', 'manager'));
            return $pdf->stream('surat_peringatan_'.$no.'.pdf');
        }
        elseif ($sKeluar->jenis_id == 4){
            $pdf->loadView("pegawai.surat-keluar.k-pengajuan.pengajuan-print", compact('sKeluar', 'iKeluar', 'kKeluar'));
            return $pdf->stream('surat_pengajuan_dana_'.$no.'.pdf');
        }
        elseif ($sKeluar->jenis_id == 5){
            $jabatan = Jabatan::where('nama_jabatan', 'Direktur Quali International Surabaya')->firstOrFail();
            $direktur = Pegawai::where('jabatan_id', $jabatan->id)->firstOrFail();

            $pdf->loadView("pegawai.surat-keluar.k-pengangkatan.pengangkatan-print", compact('sKeluar', 'iKeluar', 'kKeluar', 'direktur'));
            return $pdf->stream('surat_pengangkatan_'.$no);
        }
        elseif ($sKeluar->jenis_id == 6){
            $pdf->loadView("pegawai.surat-keluar.k-pengalaman.pengalaman-print", compact('sKeluar', 'iKeluar', 'kKeluar'));
            return $pdf->stream('surat_keterangan_pengalaman_'.$no);
        }
        elseif ($sKeluar->jenis_id == 7){
            $pdf->loadView("pegawai.surat-keluar.k-keputusan.keputusan-print", compact('sKeluar', 'iKeluar', 'kKeluar'));
            return $pdf->stream('surat_keputusan_instrukur_'.$no);
        }
        elseif ($sKeluar->jenis_id == 8){
            $pdf->loadView("pegawai.surat-keluar.k-sylabus.sylabus-print", compact('sKeluar', 'iKeluar', 'kKeluar'));
            return $pdf->stream('surat_keputusan_penyusun_sylabus_'.$no);
        }
        elseif ($sKeluar->jenis_id == 9){
            $pdf->loadView("pegawai.surat-keluar.k-rpp.rpp-print", compact('sKeluar', 'iKeluar', 'kKeluar'));
            return $pdf->stream('surat_keputusan_penyusun_sylabus_rpp_'.$no);
        }
        else{
            return back();
        }
    }

    public function destroy($id){

        $surK = SuratKeluar::find($id);
        $surK->delete();
        $jenis = JenisSurat::where('id', $surK->jenis_id)->firstOrFail();

//        dd($jenis['nama_jenis_surat']);
//        dd($surK->jenis_id);

        return redirect()->route('surk-home')->with('hapus', 'Data' . $jenis['nama_jenis_surat'] . '_' . $surK->no_surat . ' terpilih berhasil dihapus.');
    }

    public function jabatan(){
        $lembaga_id = Input::get('lembaga_id');
        $jabatan = Jabatan::where('lembaga_id', '=', $lembaga_id)->get();
        return response()->json($jabatan);
    }
}
