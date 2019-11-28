<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\koi;
use App\admin;
use App\pengguna;

class KoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $koi = koi::all();
        return view('user.koi', ['koi'=> $koi ]);
    }
    public function koimore($id)
    {
        $koi = koi::find($id);
        return view('user.koimore', ['koi'=> $koi ]);
    }
     public function adminmore($id)
    {
        $koi = koi::find($id);
        return view('admin.koimore', ['koi'=> $koi ]);
    }


    public function indexadmin()
    {
        $koi = koi::all();
        $admin = admin::all();
        return view('admin.koi', ['koi'=> $koi ],['admin'=> $admin ]);
    }
     public function adminweb()
    {
        $koi = koi::all();
        return view('admin.koiweb', ['koi'=> $koi ]);
    }

    public function create()
    {
         $admin = admin::all();
         $koi = koi::all();
       
        return view('admin.tambahkoi',['admin'=>$admin],['koi' => $koi]);
        
    }


    

public function store(Request $request)
    {
        
        
         $koi = "NO";
        if($request->hasFile('foto'))
        {
            $destination = "fotokoi";
            $foto = $request->file('foto');
            $foto->move($destination, $foto->getClientOriginalName());
            $request->foto = $request->file('foto')->getClientOriginalName();
            $koi = 'Ya';

        }
        
        if($koi=='Ya'){

        $koi = new koi;
        $koi->nama = $request->nama;
        $koi->jenis = $request->jenis;
        $koi->deskripsi = $request->deskripsi;
        $koi->foto = $request->foto;
        
        $koi->save();     
        
        }      
        return redirect('/koi-admin');
    }
    public function edit($id)

    {
         $admin = admin::all();
        $koi = koi::find($id);
        return view('admin.editkoi',['admin'=>$admin],['koi' => $koi]);
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
        $koi = koi::find($id);
         $koi->update($request->all());
         
        if ($request ->hasFile('foto')) {
            $destination= "fotokoi";
              $request->file('foto')->move($destination,$request->file('foto')->getClientOriginalName());
              $koi->foto = $request->file('foto')->getClientOriginalName();
              $koi->save();
          }
        return redirect('/koi-admin');

    }
     public function delete($id)
    {    

         $koi = koi::find($id);
         $koi->delete($koi);
         return redirect('/koi-admin');

        //
    }
}
