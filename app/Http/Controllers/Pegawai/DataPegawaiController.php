<?php

namespace App\Http\Controllers\Pegawai;

use App\Agama;
use App\Bank;
use App\Http\Controllers\Controller;
use App\Jabatan;
use App\Jenjang;
use App\JurusanPendidikan;
use App\Kewarganegaraan;
use App\Pegawai;
use App\RiwayatPendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DataPegawaiController extends Controller
{
    public function index(){
        $pegawai_view = RiwayatPendidikan::orderBy('pegawai_id', 'ASC')->get();
        return view('pegawai.data-pegawai.d-p-home', compact('pegawai_view'));
    }

    public function done(){
        return view('pegawai.data-pegawai.d-p-done');
    }

    public function create()
    {
        $jabatan = Jabatan::all();
        $kewarganegaraan = Kewarganegaraan::all();
        $agama = Agama::all();
        $bank = Bank::all();
        return view('pegawai.data-pegawai.d-p-tambah', compact( 'jabatan', 'agama', 'kewarganegaraan', 'bank'));
    }

    public function create_r(){

        $jenjang = Jenjang::all();
        $jurusan = JurusanPendidikan::all();
        $pegawai = Pegawai::orderBy('id','DESC')->first();
        return view('pegawai.data-pegawai.d-p-tambah-r', compact('pegawai','jenjang', 'jurusan'));
    }

    public function store(Request $request)
    {
       $foto = $request->file('foto')->store('foto_pegawai');

       Pegawai::create([
          'user_id' => Auth::user()->id,
          'nik' => $request->nik,
          'foto' => $foto,
          'nama' => $request->nama,
          'alamat' => $request->alamat,
          'tempat_lahir' => $request->tempat_lahir,
          'tgl_lahir' => $request->tanggal_lahir,
          'kelamin' => $request->kelamin,
          'agama_id' => $request->agama,
          'kewarganegaraan_id' => $request->negara,
          'telpon' => $request->no_telp,
          'email' => $request->email,
          'status_pernikahan' => $request->status,
          'nuptk' => $request->nuptk,
          'no_rek' => $request->no_rek,
          'bank_id' => $request->bank,
          'kcp_bank' => $request->kcp_bank,
          'ibu' => $request->nama_ibu,
          'nik_ibu' => $request->nik_ibu,
          'ayah' => $request->nama_ayah,
          'nik_ayah' => $request->nik_ayah,
          'pasangan' => $request->nama_p,
          'pekerjaan_pasangan' => $request->pekerjaan_p,
          'tgl_masuk' => $request->tanggal_masuk,
          'no_sk' => $request->no_sk,
          'jabatan_id' => $request->jenis_p,

        ]);

        return redirect()->route('d-p-tambah-r')->with('pendidikan','Lanjutkan dengan mengisi riwayat pendidikan');
    }

    public function store_r(Request $request)
    {
        //dd($pegawai);
        $pegawai = Pegawai::find($request->id_pegawai);

        RiwayatPendidikan::create([
            'pegawai_id' => $pegawai->id,
            'jenjang_id' => $request->jenjang,
            'jurusan_id' => $request->jurusan,
            'instansi' => $request->instansi,
            'thn_lulus' => $request->thn_lulus,

        ]);

        return redirect()->route('d-pegawai')->with('pegawai','Data pegawai berhasil ditambahkan.');
    }

    public function edit(Pegawai $pegawai, RiwayatPendidikan $rpegawai){

        $jabatan = Jabatan::all();
        $kewarganegaraan = Kewarganegaraan::all();
        $agama = Agama::all();
        $bank = Bank::all();

        return view('pegawai.data-pegawai.d-p-edit', compact('pegawai', 'rpegawai', 'jabatan', 'kewarganegaraan', 'agama', 'bank'));
    }

    public function edit_r(RiwayatPendidikan $pegawai){

        $jenjang = Jenjang::all();
        $jurusan = JurusanPendidikan::all();

        return view('pegawai.data-pegawai.d-p-edit-r', compact('pegawai', 'jenjang', 'jurusan'));
    }

    public function update(Request $request, $id){

        $pegawai = Pegawai::find($id);
        $pegawai->update([
            'user_id' => Auth::user()->id,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tanggal_lahir,
            'kelamin' => $request->kelamin,
            'agama_id' => $request->agama,
            'kewarganegaraan_id' => $request->negara,
            'telpon' => $request->no_telp,
            'email' => $request->email,
            'status_pernikahan' => $request->status,
            'nuptk' => $request->nuptk,
            'no_rek' => $request->no_rek,
            'bank_id' => $request->bank,
            'kcp_bank' => $request->kcp_bank,
            'ibu' => $request->nama_ibu,
            'nik_ibu' => $request->nik_ibu,
            'ayah' => $request->nama_ayah,
            'nik_ayah' => $request->nik_ayah,
            'pasangan' => $request->nama_p,
            'pekerjaan_pasangan' => $request->pekerjaan_p,
            'tgl_masuk' => $request->tanggal_masuk,
            'no_sk' => $request->no_sk,
            'jabatan_id' => $request->jenis_p,
        ]);

        return redirect()->route('d-pegawai')->with('pendidikan', 'Data pegawai berhasil diupdate.'); //Lanjutkan dengan mengisi riwayat pendidikan.
    }

    public function update_r(Request $request, $id){

        $rpegawai = RiwayatPendidikan::find($id);
        $rpegawai->update([
            'jenjang_id' => $request->jenjang,
            'jurusan_id' => $request->jurusan,
            'instansi' => $request->instansi,
            'thn_lulus' => $request->thn_lulus,
        ]);

        return redirect()->route('d-pegawai')->with('update_r', 'Data pegawai berhasil diupdate.');
    }

    public function destroy($id){

        $rpegawai = RiwayatPendidikan::find($id);
        $rpegawai->delete();

        return redirect()->route('d-pegawai')->with('destroy', 'Data terpilih berhasil dihapus.');
    }

}
