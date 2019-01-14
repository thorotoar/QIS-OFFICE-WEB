<?php

namespace App\Http\Controllers\pegawai;

use App\Dokumen;
use App\FileDokumen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

class DokumenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $dokumenV = Dokumen::orderBy('created_at', 'ASC')->get();
        return view('pegawai.dokumen.d-home', compact('dokumenV'));
    }

    public function create(){
        $dokumen = Dokumen::all();
        return view('pegawai.dokumen.d-tambah', compact('dokumen'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_dokumen' => 'required|unique:dokumens,nama_dokumen',
            'tgl_dicatat' => 'required|unique:dokumens,tgl_dicatat',
            'keterangan' => 'required|unique:dokumens,keterangan',
            'upload_file' => 'required',
            'upload_file.*' => 'mimes:jpg,jpeg,gif,png,pdf,doc,docx,txt,zip,rar,xls,xlsx,odt,ppt,pptx,video/avi,video/mpeg,video/quicktime|max:5120',
        ],[
            'nama_dokumen.required' => 'Nama dokumen belum anda isi, silahkan isi terlebih dahulu!.',
            'tgl_dicatat.required' => 'Tanggal dicatat belum anda isi, silahkan isi terlebih dahulu!.',
            'keterangan.required' => 'Keterangan belum anda isi, silahkan isi terlebih dahulu!.',
            'upload_file.required' => 'File dokumen belum anda isi, silahkan isi terlebih dahulu!.',
            'nama_dokumen.unique' => 'Nama dokumen yang anda tambahkan sudah tersedia, masukan nama dokumen lain!.',
            'tgl_dicatat.unique' => 'Tanggal dicatat yang anda tambahkan sudah tersedia, masukan tanggal dicatat lain!.',
            'keterangan.unique' => 'Keterangan yang anda tambahkan sudah tersedia, masukan keterangan lain!.',
            'upload_file.max:5120' => 'Ukuran file yang anda upload terlalu besar.',
        ]);

        $nama = $request->nama_dokumen;

        $dokumen = Dokumen::create([
            'user_id' => Auth::user()->id,
            'nama_dokumen' => $request->nama_dokumen,
            'tgl_file' => $request->tgl_file,
            'tgl_dicatat' => $request->tgl_dicatat,
            'keterangan' => $request->keterangan,
            'created_by' => Auth::user()->nama_user,

        ]);

        if (Input::has('upload_file')) {
            //$user = Dokumen::find($request->id);
            foreach ($request->file('upload_file') as $files){
                $name = str_replace(' ', '_', str_random(4) . '' . $files->getClientOriginalName());
                $files->move('images/file-dokumen/', $name);
                FileDokumen::create([
                    'dokumen_id' => $dokumen->id,
                    'upload_file' => 'images/file-dokumen/' . $name,
                ]);
            }
        }


        return redirect()->route('d-home')->with('sukses','File '. $nama . ' berhasil ditambahkan.');
    }

    public function edit(Request $request){

        $dokumen = Dokumen::find($request->id);
        $fileDok = FileDokumen::where('dokumen_id', $dokumen->id)->get();

        return view('pegawai.dokumen.d-edit', compact('dokumen', 'fileDok'));
    }


    public function update(Request $request, $id){

        $dokumen = Dokumen::find($id);
        $fileDok = FileDokumen::where('dokumen_id', $dokumen->id)->get();

        //dd($pegawai);
        $dokumen->update([
            'user_id' => Auth::user()->id,
            'nama_dokumen' => $request->nama_dokumen,
            'tgl_file' => $request->tgl_file,
            'tgl_dicatat' => $request->tgl_dicatat,
            'keterangan' => $request->keterangan,
            'updated_by' => Auth::user()->nama_user,
        ]);

        if (Input::has('upload_file_new')) {
            foreach ($fileDok as $files){
                File::delete($files->upload_file);
                $files->delete();
            }
            foreach ($request->file('upload_file_new') as $files){
                $name = str_replace(' ', '_', str_random(4) . '' . $files->getClientOriginalName());
                $files->move('images/file-dokumen/', $name);
                FileDokumen::create([
                    'dokumen_id' => $dokumen->id,
                    'upload_file' => 'images/file-dokumen/' . $name,
                ]);
            }
        }

//        dd($request->all());

        return redirect()->route('d-home')->with('edit', 'Dokumen berhasil diubah.'); //Lanjutkan dengan mengisi riwayat pendidikan.
    }

    public function destroy($id){

        $dok = Dokumen::find($id);
        $nama = $dok->nama_dokumen;
        $fileDok = FileDokumen::where('dokumen_id', $dok->id)->get();

        foreach ( $fileDok as $files){
            $file = $files->upload_file;
            File::delete($file);
            $dok->delete();
        }


        return back()->with('hapus', 'Data '. $nama . ' berhasil dihapus.');
    }
}
