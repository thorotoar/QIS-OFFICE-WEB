<?php

namespace App\Http\Controllers\Pegawai\SuratKeluar;

use App\IsiSurat;
Use App\JenisSurat;
use App\SuratKeluar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class SuratLainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){
        $jenisur = JenisSurat::find($request->id);

        //dd($jenisur->id);

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
            'tujuan' => $request->tujuan,
            'bagian_tujuan' => $request->bagian_tujuan,
            'alamat_tujuan' => $request->alamat_tujuan,
            'tempat_tujuan' => $request->tempat_tujuan,
            'created_by' => Auth::user()->nama_user,

        ]);

        if (Input::has('besar_biyaya')) {
            IsiSurat::create([
                'surat_keluar_id' => $suratK->id,
                'isi_surat' => $request->isi,
                'created_by' => Auth::user()->nama_user,
            ]);
        }

        return redirect()->route('surk-home')->with('sukses', $jenisur->nama_jenis_surat.'_'.$suratK->no_surat. ' berhasil ditambahkan.');
    }

    public function update(Request $request, $id){
        $sKeluar = SuratKeluar::find($id);
        $iKeluar = IsiSurat::where('surat_keluar_id', $sKeluar->id)->firstOrFail();

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
            'tujuan' => $request->tujuan,
            'bagian_tujuan' => $request->bagian_tujuan,
            'alamat_tujuan' => $request->alamat_tujuan,
            'tempat_tujuan' => $request->tempat_tujuan,
            'updated_by' => Auth::user()->nama_user,
        ]);

        if (Input::has('besar_biyaya')) {
            $iKeluar->update([
                'surat_keluar_id' => $sKeluar->id,
                'isi_surat' => $request->isi,
                'updated_by' => Auth::user()->nama_user,
            ]);
        }

        return redirect()->route('surk-home')->with('edit', $jenis . '_' . $sKeluar->no_surat . ' berhasil diubah.');
    }
}
