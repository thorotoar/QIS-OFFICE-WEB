<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{

    public function index()
    {
        $jabatan = Jabatan::orderBy('id', 'ASC')->get();
        return view('admin.j-management.m-j-home', compact('jabatan'));
    }

    public function create()
    {
        return view('admin.j-management.m-j-tambah');
    }

    public function store(Request $request)
    {
        //return $request;
//        $jabatan = new jabatan;
////        $this->validate($request,[
////            'nama_jabatan'=>'required', //unique:todos
////        ]);
//        $jabatan->nama_jabatan = $request->jabatan;
//        $jabatan->save();

        Jabatan::create([
            'nama_jabatan' => $request->jabatan,
        ]);
        return redirect()->route('jm-home')->with('sukses','Jabatan baru berhasil ditambahkan.');
    }

    public function show($id)
    {
        //return $id;

        $jabatan = Jabatan::find($id);
        return view('admin.j-management.m-j-show', compact('jabatan'));
    }

    public function edit($id)
    {

        $jabatan = Jabatan::find($id);
        return view('admin.j-management.m-j-edit', compact('jabatan'));
    }

    public function update(Request $request, $id)
    {
        $jabatan = Jabatan::find($id);
//        $this->validate($request,[
//            'nama_jabatan'=>'required', //unique:todos
//        ]);
        $jabatan->nama_jabatan = $request->jabatan;
        $jabatan->save();
        return redirect()->route('jm-home')->with('edit','Jabatan berhasil diubah.');
    }

    public function destroy($id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->delete();

        return redirect('/admin/manajemen-jabatan')->with('hapus','Jabatan berhasil dihapus.');
    }
}
