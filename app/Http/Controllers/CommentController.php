<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\forum;
use App\galeri;
use App\pengguna;
use App\pakar;
use App\fkomen;
use App\gkomen;

use Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addcomment(Request $request, Forum $forum)
    {
        $fkomen = new fkomen;
        $fkomen->id_pengguna = Auth::user('pengguna')->id;
        $fkomen->id_pakar = Auth::user('pakar')->id;
        $fkomen->nama = Auth::user()->name;
        $fkomen->komen = $request->komen;

        $forum->comments()->save($fkomen);

        return back();
    }
    
     public function addcommentg(Request $request, Galeri $galeri)
    {
        $gkomen = new gkomen;
        $gkomen->id_pengguna = Auth::user('pengguna')->id;
        $gkomen->id_pakar = Auth::user('pakar')->id;
        $gkomen->nama = Auth::user()->name;
        $gkomen->komen = $request->komen;

        $galeri->comments()->save($gkomen);

        return back();
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
