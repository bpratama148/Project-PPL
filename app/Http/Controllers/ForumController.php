<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\forum;
use App\pengguna; 
use App\login_pengguna;
use App\fkomen;
use Auth;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $forum = forum::all();
            
        return view('user.forum',['forum' => $forum]);
    }

    public function mypost(Pengguna $pengguna)
    {
        $forum = forum::where('id_pengguna', $pengguna->id)->get();
        return view('user.mypost',compact('pengguna','forum')); 
    }
    

    public function forum()
    {
           $forum = forum::all();
            
        return view('admin.forum',['forum' => $forum]);
    }
    
    


     public function balas($id)
    {
        $forum = forum::find($id);
        return view('user.balas',['forum' => $forum]);
    }

public function balaspakar($id)
    {
        $forum = forum::find($id);
        return view('pakar.balas',['forum' => $forum]);
    }

      public function more($id)
    {
        $forum = forum::find($id);
        return view('admin.forummore',['forum' => $forum]);
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




          $forum = "NO";
        if($request->hasFile('gambar'))
        {
            $destination = "gambar_forum";
            $gambar = $request->file('gambar');
            $gambar->move($destination, $gambar->getClientOriginalName());
            $request->gambar = $request->file('gambar')->getClientOriginalName();
            $forum = 'Ya';

        }
        
        if($forum=='Ya'){

        $forum = new forum;
        $forum->id_pengguna = Auth::id();
        $forum->nama = Auth::user()->name; 
        $forum->thread = $request->thread;
        $forum->deskripsi = $request->deskripsi;
        $forum->gambar = $request->gambar;
      
      
        $forum->save();     
        
        }      

         return redirect('/pengguna-forum');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteadmin($id)
    {    

         $forum = forum::find($id);
         $forum->delete($forum);
         return back();

        //
    }
    public function delete($id)
    {    

         $forum = forum::find($id);
         $forum->delete($forum);
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
        $forum = forum::find($id);
        return view('user.forumedit',['forum'=> $forum]);
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
        $forum = forum::find($id);
         $forum->update($request->all());
         
        if ($request ->hasFile('gambar')) {
               $destination = "gambar_forum";
              $request->file('gambar')->move($destination,$request->file('gambar')->getClientOriginalName());
              $forum->gambar = $request->file('gambar')->getClientOriginalName();
              $forum->save();
          }
        return back();

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
