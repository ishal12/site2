<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Kategori;

use Session;

use Illuminate\Support\Facades\Auth;

class KategoriController extends Controller
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
        $kategoris = kategori::paginate(5);
        return view('admin.kategori.index')->withKategoris($kategoris);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
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

        $kategori = new Kategori;

        $kategori->nama = $request->nama;

        $kategori->save();

        Session::flash('csuccess', 'Data berhasil ditambah!');
        //mahasiswa::create(Request::all());
        return redirect()->route('admin.kategori.index');
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
        $kategori = Kategori::find($id);
        return view('admin.kategori.edit')->withkategori($kategori);
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

        $kategori = kategori::find($id);

        $kategori->nama = $request->input('nama');

        $kategori->save();

        Session::flash('usuccess', 'Data berhasil diubah!');
        //mahasiswa::create(Request::all());
        return redirect()->route('admin.kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::find($id);

        $kategori->delete();

        Session::flash('dsuccess', 'Data telah dihapus!');

        return redirect()->route('admin.kategori.index');
    }
}
