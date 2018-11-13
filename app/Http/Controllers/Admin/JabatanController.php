<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = Jabatan::all();
        return view('admin.j-management.m-j-home', compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.j-management.m-j-tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $jabatan = new jabatan;
//        $this->validate($request,[
//            'nama_jabatan'=>'required', //unique:todos
//        ]);
        $jabatan->nama_jabatan = $request->jabatan;
        $jabatan->save();
        return redirect()->route('jm-home')->with('sukses','Jabatan baru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return $id;

        $jabatan = Jabatan::find($id);
        return view('admin.j-management.m-j-show', compact('jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //return $id;

        $jabatan = Jabatan::find($id);
        return view('admin.j-management.m-j-edit', compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->delete();

        return redirect('/admin/manajemen-jabatan')->with('hapus','Jabatan berhasil dihapus.');
    }
}
