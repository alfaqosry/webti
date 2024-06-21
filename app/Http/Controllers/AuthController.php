<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function login(){
        return view('components.auth.login');
    }

    public function register(){
        return view('components.auth.register');
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
        $cre = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($cre)) {
            $request->session()->regenerate();
            return redirect()->route('home');

            $checkRole = Auth::user()->role;
            // dd($checkRole);
            if($checkRole == 'admin')
            {
                return redirect()->route('home');

            } elseif ($checkRole == 'mahasiswa')
            {
                return redirect()->route('/');
            } 
        }

        return back()->with('gagal', 'Login failed!');
    }

    public function post(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);
       
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'mahasiswa',
            'password' => Hash::make($request->input('password'))
        ]);
        return redirect()->route('auth.login')->with('sukses','Registrasi Anda Berhasi!, Silahkan Login...');
     
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
        //
    }
}
