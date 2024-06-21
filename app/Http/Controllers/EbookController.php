<?php

namespace App\Http\Controllers;

use App\Models\Favoritbuku;
use App\Models\Perpustakaan;
use App\Models\KategoriBuku;

use Illuminate\Http\Request;

class EbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Perpustakaan::latest()->paginate(15);
        $favorit = Perpustakaan::join('favoritbukus','perpustakaans.id', '=', 'favoritbukus.buku_id' )
                                ->join('users', 'favoritbukus.user_id','=', 'users.id')->where('users.id', auth()->user()->id)->skip(0)->take(6)->get();
        return view('depan.ebook', compact('buku','favorit'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function caribuku(Request $request)
    {

        $cari = $request->cari;
        $buku = Perpustakaan::where('judul_buku','like',"%".$cari."%")
        ->orWhere('penulis','like',"%".$cari."%")   
        ->orWhere('tahun_buku','like',"%".$cari."%")
        ->orWhere('penerbit_buku','like',"%".$cari."%")
		->paginate(15);
        
        return view('depan.caribuku', [
            'cari' => $cari,
            'buku' => $buku
        ]);

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Perpustakaan::findOrfail($id);
        $bukufav = Favoritbuku::where('buku_id' , $id)->where('user_id', auth()->user()->id)->first();
        $bukucount = Favoritbuku::where('buku_id' , $id)->where('user_id', auth()->user()->id)->count();

   
        return view('depan.ebook-show', compact('buku', 'bukufav', 'bukucount'));
    }

    public function bacaonline($id)
    {
        $buku = Perpustakaan::findOrfail($id);
        return view('depan.bacaonline', compact('buku'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $res=Favoritbuku::where('id',$id)->delete();

        return redirect()->route('ebook.show',$id)->with('success', 'Buku berhasil dihapus dari favorit');
    }
}
