<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use App\Kategori;

use Session;

use Image;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
        $this->middleware('admin')->except('show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);
        return view('admin.post.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.post.create')->withKategoris($kategoris);
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
                'judul' => 'required|max:255',
                'isi' => 'required',
                'kategoriid' => 'required|integer',
            ));

        $post = new Post;

        $post->judul = $request->judul;
        $post->isi = $request->isi;
        $post->kategoriid = $request->kategoriid;

        if ($request->hasFile('foto')){
            $image =$request->file('foto');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);

            $post->foto = $filename;
        }      

        $post->save();

        Session::flash('csuccess', 'Data berhasil ditambah!');
        //mahasiswa::create(Request::all());
        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('admin.post.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $kategoris = Kategori::all();
        $kats = array();
        foreach ($kategoris as $kategori){
            $kats[$kategori->id] = $kategori->nama;
        }
        return view('admin.post.edit')->withPost($post)->withKategoris($kats);
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
                'judul' => 'required|max:255',
                'isi' => 'required',
                'kategoriid' => 'required|integer',
            ));

        $post = Post::find($id);

        $post->judul = $request->input('judul');
        $post->isi = $request->input('isi');
        $post->kategoriid = $request->input('kategoriid');

        $post->save();

        Session::flash('csuccess', 'Data berhasil diubah!');
        //mahasiswa::create(Request::all());
        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        Session::flash('dsuccess', 'Data telah dihapus!');

        return redirect()->route('admin.post.index');
    }
}
