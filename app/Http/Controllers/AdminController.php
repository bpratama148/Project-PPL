<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\pengguna;
use App\pakar;
use App\forum;
use App\gejala;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $forum = forum::all();
         $admin = admin::all();
        return view('admin.index',['admin'=>$admin],['forum'=>$forum]);
       
    }
    public function gejala()
    {
         $gejala = gejala::all();
         $admin = admin::all();
        return view('admin.gejala',compact('gejala','admin'));
       
    }
     public function pengguna()
    {
         $pengguna = pengguna::all();
         $admin = admin::all();
        return view('admin.pengguna',['admin'=>$admin],['pengguna'=>$pengguna]);
        //
    }

     public function pakar()
    {
        $pakar = pakar::all();
        $admin = admin::all();
       
        return view('admin.pakar',['admin'=>$admin],['pakar' => $pakar]);
        //
    }
     public function pakarweb()
    {
        $pakar = pakar::all();
       
       
        return view('admin.pakarweb',['pakar' => $pakar]);
        //
    }


       public function web()
    {
        
        return view('admin.web');
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
        //
    }
}
