<?php

namespace App\Http\Controllers\Pegawai\SuratKeluar;

use App\IsiSurat;
Use App\JenisSurat;
use App\KontenSurat;
use App\SuratKeluar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class SuratPengajuanController extends Controller
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
            'created_by' => Auth::user()->nama_user,
        ]);

        if (Input::has('nama_barang')) {
            $isiSurat = IsiSurat::create([
                'surat_keluar_id' => $suratK->id,
                'created_by' => Auth::user()->nama_user,
            ]);

            foreach ($request['nama_barang'] as $index => $value) {
                KontenSurat::create([
                    'isi_id' => $isiSurat->id,
                    'nama_barang' => $value,
                    'jumlah_barang' => $request['jumlah_barang'][$index],
                    'harga_barang' => $request['harga_barang'][$index],
                    'created_by' => Auth::user()->nama_user,
                ]);
            }
        }

        return redirect()->route('surk-home')->with('sukses', $jenisur->nama_jenis_surat.'_'.$suratK->no_surat. ' berhasil ditambahkan.');
    }

    public function update(Request $request, $id){
        $sKeluar = SuratKeluar::find($id);
        $iKeluar = IsiSurat::where('surat_keluar_id', $sKeluar->id)->firstOrFail();
        KontenSurat::where('isi_id', $iKeluar->id)->delete(); //problem

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
                'surat_keluar_id' => $sKeluar->id,
                'updated_by' => Auth::user()->nama_user,
            ]);

            foreach ($request['nama_barangs'] as $index => $value) {
                KontenSurat::create([
                    'isi_id' => $iKeluar->id,
                    'nama_barang' => $value,
                    'jumlah_barang' => $request['jumlah_barangs'][$index],
                    'harga_barang' => $request['harga_barangs'][$index],
                    'updated_by' => Auth::user()->nama_user,
                ]);
            }
        }

        return redirect()->route('surk-home')->with('edit', $jenis . '_' . $sKeluar->no_surat . 'masuk berhasil diubah.');
    }

}
