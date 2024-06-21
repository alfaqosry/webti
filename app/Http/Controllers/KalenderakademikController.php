<?php

namespace App\Http\Controllers;

use App\Models\Kalenderakademik;
use Illuminate\Http\Request;

class KalenderakademikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kalenderAkademiks = Kalenderakademik::get();

        return view('belakang.kalender-akademik.index', compact('kalenderAkademiks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('belakang.kalender-akademik.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'start' => 'required',
           
        ]);

        Kalenderakademik::create([
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end,
            'color' => $request->color,
            'url' => $request->url,
        ]);

        return redirect()->route('kalender-akademik.index')->with('success', 'Data berhasil ditambahkan');
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
    public function edit(Kalenderakademik $kalenderAkademik)
    {
        

        return view('belakang.kalender-akademik.edit', [
            'kalender' => $kalenderAkademik
        ]);
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
            'title' => 'required',
            'start' => 'required',
           
        ]);
        $kalender = Kalenderakademik::findOrFail($id);
        $kalender->update($request->all());

        return redirect()->route('kalender-akademik.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $kalender = Kalenderakademik::findOrFail($id);
        if($kalender->delete){

        
        return redirect()->route('kalender-akademik.index')->with('success', 'Data berhasil hapus');

    }else {
        return redirect()->route('kalender-akademik.index')->with('success', 'Data gagal hapus');
    }
      }
}
