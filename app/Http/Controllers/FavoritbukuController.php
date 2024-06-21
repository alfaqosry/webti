<?php

namespace App\Http\Controllers;

use App\Models\Favoritbuku;
use App\Models\Perpustakaan;
use Illuminate\Http\Request;

class FavoritbukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addFavorit($buku_id){

        $favoritbuku = Favoritbuku::create([
            'buku_id' => $buku_id,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('ebook.show',$buku_id)->with('success', 'Buku berhasil ditambahkan favorit');

    }

    public function removeFavorit(){

    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $bukuid = Favoritbuku::findOrFail($id);
        $res=Favoritbuku::where('id',$id)->delete();

   
        return redirect()->route('ebook.show',$bukuid->buku_id)->with('success', 'Buku berhasil dihapus dari favorit');
    }
}
