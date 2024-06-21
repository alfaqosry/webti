<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Kategori;
use App\Models\Perpustakaan;
use App\Models\KategoriBuku;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;


class PerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perpustakaan = Perpustakaan::get();
        return view('belakang.perpustakaan.index', [
            'databuku' => $perpustakaan
        ]);
    }

    /**n
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriBuku::get();

        return view('belakang.perpustakaan.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);
        $this->validate($request, [
            'judul_buku' => 'required',
            'penulis' => 'required',
            'tahun_buku' => 'required',
            'kategoribuku' => 'required',
            'nisbn' => 'required',
            // 'src_buku' => 'required',
            'foto_sampul' => 'required',
            'pdf_buku' => 'required',


        ]);

        $cekkategori = KategoriBuku::where('kategori_buku', $request->kategoribuku)->first();


        if ($cekkategori) {
            $kategoriid = $cekkategori->id;
        } else {
            $kategoribuku = KategoriBuku::create([
                'kategori_buku' => $request->kategoribuku,
            ]);
            $kategoriid = $kategoribuku->id;
        }

        // if ($request->kategori) {
        //     $berita->kategoris()->attach($request->kategori);
        // } else {
        //     $berita->kategoris()->attach([6]);
        // }

        $image = [];
        if ($request->hasFile('foto_sampul')) {
            $image = $request->file('foto_sampul')->store('buku', 'public');
        }
        $pdf = [];
        if ($request->hasFile('pdf_buku')) {
            // $pdf = $request->file('pdf_buku')->store('bukupdf', 'public');
            $pdf = Storage::disk('laraview')->put('pdf', $request->pdf_buku);
        }


        $perpustakaan = Perpustakaan::create([
            'judul_buku' => $request->judul_buku,
            'penulis' => $request->penulis,
            'tahun_buku'  => $request->tahun_buku,
            'kategori_buku_id' => (int) $kategoriid,
            'nisbn' => $request->nisbn,
            'src_buku' => $request->src_buku,
            'foto_sampul' => $image,
            'pdf_buku' => $pdf,
            'penerbit_buku' => $request->penerbit_buku
        ]);



        return redirect()->route('perpustakaan.index')->with('success', 'Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku  = Perpustakaan::findOrFail($id);

        return view('belakang.perpustakaan.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Perpustakaan::findOrFail($id);
        $kategoribuku = KategoriBuku::where('id', $buku->kategori_buku_id)->first();
        $kategori = KategoriBuku::get();

        return view('belakang.perpustakaan.edit', compact('buku', 'kategoribuku', 'kategori'));
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
        $this->validate($request, [
            'judul_buku' => 'required',
            'penulis' => 'required',
            'tahun_buku' => 'required',
            'kategoribuku' => 'required',
            'nisbn' => 'required',
            // 'src_buku' => 'required',
       


        ]);

        $cekkategori = KategoriBuku::where('kategori_buku', $request->kategoribuku)->first();


        if ($cekkategori) {
            $kategoriid = $cekkategori->id;
        } else {
            $kategoribuku = KategoriBuku::create([
                'kategori_buku' => $request->kategoribuku,
            ]);
            $kategoriid = $kategoribuku->id;
        }

        $buku = Perpustakaan::findOrFail($id);

        $image = $buku->foto_sampul;
        if ($request->hasFile('foto_sampul')) {
            if (Storage::exists('storage/' . $buku->foto_sampul)) {
                Storage::delete('storage/' . $buku->foto_sampul);
            }
            $image = $request->file('foto_sampul')->store('buku', 'public');
        }


     
      

      
       $pdf = $buku->pdf_buku;
        if ($request->hasFile('pdf_buku')) {
            unlink(public_path($buku->pdf_buku));
            
            $pdf = Storage::disk('laraview')->put('pdf', $request->pdf_buku);
            
        }


      
            $buku->judul_buku = $request->judul_buku;
            $buku->penulis = $request->penulis;
            $buku->tahun_buku  = $request->tahun_buku;
            $buku->kategori_buku_id = (int) $kategoriid;
            $buku->nisbn = $request->nisbn;
            $buku->src_buku = $request->src_buku;
            $buku->foto_sampul = $image;
            $buku->pdf_buku = $pdf;
            $buku->penerbit_buku = $request->penerbit_buku;
            $buku->save();
      

        return redirect()->route('perpustakaan.index')->with('success', 'Buku berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $buku = Perpustakaan::findOrFail($id);

        unlink(public_path($buku->pdf_buku));
        Storage::delete('storage/' . $buku->foto_sampul);
        $buku->delete();

        return redirect()->route('perpustakaan.index')->with('success', 'Buku berhasil dihapus');
    }
}
