<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\Redirect;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $buku = Buku::all();
        // return view ('buku.index')->with('buku', $buku);
        $data = Buku::orderBy('judul_buku', 'desc')->get();
        return view('/buku/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input = $request->all();
        // Buku::create($input);
        // return redirect('buku')->with('flash_message', 'Buku Ditambahkan!');

        $image = $request->file('image');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        $data = [
            'judul_buku' => $request->judul_buku,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'file_name' => $imageName,
        ];

        Buku::create($data);
        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $buku = Buku::find($id);
        $buku = Buku::find($id);
        return view('buku.show')->with('buku', $buku);
        // return view('buku.show')->with('buku', $buku);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::find($id);
        return view('buku.edit')->with('buku', $buku);
        // return $buku;
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
        $buku = Buku::find($id);
        $input = $request->all();
        $image = $request->file('file_name');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'), $imageName);
        $data = [
        'judul_buku' => $request->judul_buku,
        'penulis' => $request->penulis,
        'penerbit' => $request->penerbit,
        'tahun_terbit' => $request->tahun_terbit,
        'file_name' => $imageName,
    ];
        $buku->update($data);
        return redirect('buku')->with('flash_message', 'Buku Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buku::where('id', $id)->delete();
        return redirect('/')->with('falsh_message', 'Buku Deleted!');
    }
}