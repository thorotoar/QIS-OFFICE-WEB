<?php

namespace App\Http\Controllers\Pegawai\SuratKeluar;

use App\IsiSurat;
use App\Jabatan;
Use App\JenisSurat;
use App\Jenjang;
use App\JurusanPendidikan;
use App\Lembaga;
use App\Pegawai;
use App\RiwayatPendidikan;
use App\SuratKeluar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class SuratPengangkatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){
        $pegawai = Pegawai::find($request->nama_pegawai);
//        $riwaPegawai = RiwayatPendidikan::where('pegawai_id', $pegawai->id)->firstOrFail();
        $jurusan = JurusanPendidikan::where('id', $pegawai->jurusan_id)->firstOrFail();
        $jenjang = Jenjang::where('id', $pegawai->jenjang_id)->firstOrFail();
        $jenisur = JenisSurat::find($request->id);
        $lembaga = Lembaga::find($request->lembaga);
        $jabatan = Jabatan::find($request->jabatan_lembaga);

//        dd($request->all());

        $suratK = SuratKeluar::create([
            'user_id' => Auth::user()->id,
            'jenis_id' => $jenisur->id,
            'no_surat' => $request->no_surat,
            'kode_surat' => $request->kode_surat,
            'tempat' => $request->tempat,
            'tgl_keluar' => $request->tgl_keluar,
            'tgl_dicatat' => $request->tgl_dicatat,
            'created_by' => Auth::user()->nama_user,
        ]);

        if (Input::has('nama_pegawai')) {
            IsiSurat::create([
                'surat_keluar_id' => $suratK->id,
                'nama_pegawai' => $pegawai->nama,
                'tempat_lahir_pegawai' => $pegawai->tempat_lahir,
                'tanggal_lahir_pegawai' => $pegawai->tgl_lahir,
                'jurusan_pegawai' => $jurusan->nama_jurusan_pendidikan,
                'jenjang_pegawai' => $jenjang->nama_jenjang,
                'institur_pegawai' => $pegawai->instansi,
                'tahun_lulus_pegawai' => $pegawai->thn_lulus,
                'hari_tanggal_1' => $request->tgl_rapat,
                'lembaga' => $lembaga->nama_lembaga,
                'jabatan' => $jabatan->nama_jabatan,
                'created_by' => Auth::user()->nama_user,
            ]);
        }


        return redirect()->route('surk-home')->with('sukses', $jenisur->nama_jenis_surat.'_'.$suratK->no_surat. 'berhasil ditambahkan.');
    }

    public function update(Request $request, $id){
        $pegawai = Pegawai::find($request->nama_pegawai);
//        $riwaPegawai = RiwayatPendidikan::where('pegawai_id', $pegawai->id)->firstOrFail();
        $jurusan = JurusanPendidikan::where('id', $pegawai->jurusan_id)->firstOrFail();
        $jenjang = Jenjang::where('id', $pegawai->jenjang_id)->firstOrFail();
        $lembaga = Lembaga::find($request->lembaga);
        $jabatan = Jabatan::find($request->jabatan_lembaga);

        $sKeluar = SuratKeluar::find($id);
        $iKeluar = IsiSurat::where('surat_keluar_id', $sKeluar->id)->firstOrFail();

        $jenis = JenisSurat::where('id', $sKeluar->jenis_id)->firstOrFail();

//        dd($kKeluar->isi_id);

        $sKeluar->update([
            'user_id' => Auth::user()->id,
            'no_surat' => $request->no_surat,
            'kode_surat' => $request->kode_surat,
            'tempat' => $request->tempat,
            'tgl_keluar' => $request->tgl_keluar,
            'tgl_dicatat' => $request->tgl_dicatat,
            'updated_by' => Auth::user()->nama_user,

        ]);

        if (Input::has('nama_pegawai')) {
            $iKeluar->update([
                'surat_keluar_id' => $sKeluar->id,
                'nama_pegawai' => $pegawai->nama,
                'tempat_lahir_pegawai' => $pegawai->tempat_lahir,
                'tanggal_lahir_pegawai' => $pegawai->tgl_lahir,
                'jurusan_pegawai' => $jurusan->nama_jurusan_pendidikan,
                'jenjang_pegawai' => $jenjang->nama_jenjang,
                'institur_pegawai' => $pegawai->instansi,
                'tahun_lulus_pegawai' => $pegawai->thn_lulus,
                'hari_tanggal_1' => $request->tgl_rapat,
                'lembaga' => $lembaga->nama_lembaga,
                'jabatan' => $jabatan->nama_jabatan,
                'updated_by' => Auth::user()->nama_user,
            ]);
        }

        return redirect()->route('surk-home')->with('edit', $jenis . '_' . $sKeluar->no_surat . 'masuk berhasil diubah.');
    }
}
