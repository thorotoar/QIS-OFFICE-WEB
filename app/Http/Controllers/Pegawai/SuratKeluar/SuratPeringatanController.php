<?php

namespace App\Http\Controllers\Pegawai\SuratKeluar;

use App\IsiSurat;
Use App\JenisSurat;
use App\Kabupaten;
use App\PesertaDidik;
use App\Provinsi;
use App\SuratKeluar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class SuratPeringatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){
        $peserta = PesertaDidik::find($request->peserta_didik);
        $jenisur = JenisSurat::find($request->id);

        $provinsi = Provinsi::where('id', $peserta->provinsi_id)->firstOrFail();
        $kabupaten = Kabupaten::where('id', $peserta->kabupaten_id)->firstOrFail();

//        dd($provinsi['nama_provinsi']);

        $suratK = SuratKeluar::create([
            'user_id' => Auth::user()->id,
            'jenis_id' => $jenisur->id,
            'no_surat' => $request->no_surat,
            'kode_surat' => $request->kode_surat,
            'lampiran' => $request->lampiran,
            'perihal' => $request->perihal,
            'tempat' => $request->tempat,
            'tgl_keluar' => $request->tgl_keluar,
            'tgl_dicatat' => $request->tgl_dicatat,
            'created_by' => Auth::user()->nama_user,

        ]);

        if (Input::has('peserta_didik')) {
            IsiSurat::create([
                'surat_keluar_id' => $suratK->id,
                'nama_peserta' => $peserta->nama,
                'provinsi_peserta' => $provinsi->nama_provinsi,
                'kabupaten_peserta' => $kabupaten->nama_kabupaten,
                'hari_tanggal_1' => $request->tgl_rapat,
                'hari_tanggal_2' => $request->tgl_kembali,
                'jam_kembali' => $request->jam_kembali,
                'created_by' => Auth::user()->nama_user,
            ]);
        }


        return redirect()->route('surk-home')->with('sukses', $jenisur->nama_jenis_surat.'_'.$suratK->no_surat. ' berhasil ditambahkan.');
    }

    public function update(Request $request, $id){
        $peserta = PesertaDidik::find($request->peserta_didik);

        $sKeluar = SuratKeluar::find($id);
        $iKeluar = IsiSurat::where('surat_keluar_id', $sKeluar->id)->firstOrFail();

        $provinsi = Provinsi::where('id', $peserta->provinsi_id)->firstOrFail();
        $kabupaten = Kabupaten::where('id', $peserta->kabupaten_id)->firstOrFail();
        $jenis = JenisSurat::where('id', $sKeluar->jenis_id)->firstOrFail();

//        dd($kKeluar->isi_id);

        $sKeluar->update([
            'user_id' => Auth::user()->id,
            'no_surat' => $request->no_surat,
            'kode_surat' => $request->kode_surat,
            'lampiran' => $request->lampiran,
            'perihal' => $request->perihal,
            'tempat' => $request->tempat,
            'tgl_keluar' => $request->tgl_keluar,
            'tgl_dicatat' => $request->tgl_dicatat,
            'updated_by' => Auth::user()->nama_user,

        ]);

        if (Input::has('peserta_didik')) {
            $iKeluar->update([
                'nama_peserta' => $peserta->nama,
                'provinsi_peserta' => $provinsi->nama_provinsi,
                'kabupaten_peserta' => $kabupaten->nama_kabupaten,
                'hari_tanggal_1' => $request->tgl_rapat,
                'hari_tanggal_2' => $request->tgl_kembali,
                'jam_kembali' => $request->jam_kembali,
                'updated_by' => Auth::user()->nama_user,
            ]);
        }

        return redirect()->route('surk-home')->with('edit', $jenis . '_' . $sKeluar->no_surat . ' berhasil diubah.');
    }
}
