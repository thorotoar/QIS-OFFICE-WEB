<?php

namespace App\Http\Controllers\Pegawai\SuratKeluar;

use App\IsiSurat;
Use App\JenisSurat;
use App\KontenSurat;
use App\Pegawai;
use App\PesertaDidik;
use App\SuratKeluar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class SuratPemberitahuanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){
        $peserta = PesertaDidik::find($request->peserta_didik);
        $pegawai = Pegawai::find($request->instruktur_kelas);
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


        return redirect()->route('surk-home')->with('sukses', $jenisur->nama_jenis_surat.'_'.$suratK->no_surat. ' berhasil ditambahkan.');
    }


    public function update(Request $request, $id){

        $peserta = PesertaDidik::find($request->peserta_didik);
        $pegawai = Pegawai::find($request->instruktur_kelas);

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

        return redirect()->route('surk-home')->with('edit', $jenis . '_' . $sKeluar->no_surat . ' berhasil diubah.'); //Lanjutkan dengan mengisi riwayat pendidikan.
    }
}
