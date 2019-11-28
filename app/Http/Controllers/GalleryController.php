<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeri;
use App\admin;
use App\pengguna; 
use App\login_pengguna;
use Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $galeri = galeri::all();
            
        return view('user.galeri',['galeri' => $galeri]);
    }
    
     public function mygallery(Pengguna $pengguna)
    {
        $galeri = galeri::where('id_pengguna', $pengguna->id)->get();
        return view('user.mygallery',compact('pengguna','galeri')); 
    }

    public function galeri()
    {
           $admin = admin::all();
           $galeri = galeri::all();
            
        return view('admin.galeri',['galeri' => $galeri],['admin' => $admin]);
    }
    public function galeriweb()
    {
          
           $galeri = galeri::all();
            
        return view('admin.galeriweb',['galeri' => $galeri]);
    }
    


     public function balas($id)
    {
        $galeri = galeri::find($id);
        return view('user.gbalas',['galeri' => $galeri]);
    }
     public function see($id)
    {
        $galeri = galeri::find($id);
        return view('user.gsee',['galeri' => $galeri]);
    }

public function balaspakar($id)
    {
        $galeri = galeri::find($id);
        return view('pakar.gbalas',['galeri' => $galeri]);
    }

      public function more($id)
    {
        $galeri = galeri::find($id);
        return view('admin.galerimore',['galeri' => $galeri]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
         
     
        
    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {




          $galeri = "NO";
        if($request->hasFile('gambar'))
        {
            $destination = "gambar_galeri";
            $gambar = $request->file('gambar');
            $gambar->move($destination, $gambar->getClientOriginalName());
            $request->gambar = $request->file('gambar')->getClientOriginalName();
            $galeri = 'Ya';

        }
        
        if($galeri=='Ya'){

        $galeri = new galeri;
        $galeri->id_pengguna = Auth::id();
        $galeri->nama = Auth::user()->name; 
      
        $galeri->deskripsi = $request->deskripsi;
        $galeri->gambar = $request->gambar;
      
      
        $galeri->save();     
        
        }      

         return redirect('/pengguna-galeri');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteadmin($id)
    {    

         $galeri = galeri::find($id);
         $galeri->delete($forum);
         return redirect('/galeri-admin');

        //
    }
     public function delete($id)
    {    

         $galeri = galeri::find($id);
         $galeri->delete($galeri);
         return back();

        //
    }
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
