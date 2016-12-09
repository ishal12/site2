<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Jabatan;

use Session;

use Illuminate\Support\Facades\Auth;

class JabatanController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatans = Jabatan::paginate(5);
        return view('admin.jabatan.index')->withJabatans($jabatans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
                'nama' => 'required|max:255',
            ));

        $jabatan = new Jabatan;

        $jabatan->nama = $request->nama;

        $jabatan->save();

        Session::flash('csuccess', 'Data berhasil ditambah!');
        //mahasiswa::create(Request::all());
        return redirect()->route('admin.jabatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatan = Jabatan::find($id);
        return view('admin.jabatan.edit')->withJabatan($jabatan);
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
        $this->validate($request, array(
                'nama' => 'required|max:255',
            ));

        $jabatan = Jabatan::find($id);

        $jabatan->nama = $request->input('nama');

        $jabatan->save();

        Session::flash('usuccess', 'Data berhasil diubah!');
        //mahasiswa::create(Request::all());
        return redirect()->route('admin.jabatan.index');
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

        Session::flash('dsuccess', 'Data telah dihapus!');

        return redirect()->route('admin.jabatan.index');
    }
}
