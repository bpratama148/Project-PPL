<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\admin;
use App\pakar;
class DataPakarController extends Controller
{
    public function create()
    {
         $admin = admin::all();
         $pakar = pakar::all();
       
        return view('admin.tambahpakar',['admin'=>$admin],['pakar' => $pakar]);
        
    }


    

/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
    {
        
        
         $pakar = "NO";
        if($request->hasFile('foto'))
        {
            $destination = "foto";
            $foto = $request->file('foto');
            $foto->move($destination, $foto->getClientOriginalName());
            $request->foto = $request->file('foto')->getClientOriginalName();
            $pakar = 'Ya';

        }
        
        if($pakar=='Ya'){

        $pakar = new pakar;
        $pakar->name = $request->name;
        $pakar->profesi = $request->profesi;
        $pakar->no_telp = $request->no_telp;
        $pakar->alamat = $request->alamat;
        $pakar->foto = $request->foto;
        $pakar->email = $request->email;
        $pakar->password = $request->password;
        $pakar->deskripsi = $request->deskripsi;
        $pakar->save();     
        
        }      
        return redirect('/admin-pakar');
    }
    public function edit($id)

    {
         $admin = admin::all();
        $pakar = pakar::find($id);
        return view('admin.editpakar',['admin'=>$admin],['pakar' => $pakar]);
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
        $pakar = pakar::find($id);
         $pakar->update($request->all());
         
        if ($request ->hasFile('foto')) {
             $destination = "foto";
              $request->file('foto')->move($destination,$request->file('foto')->getClientOriginalName());
              $pakar->foto = $request->file('foto')->getClientOriginalName();
              $pakar->save();
          }
        return redirect('/admin-pakar');

    }
     public function delete($id)
    {    

         $pakar = pakar::find($id);
         $pakar->delete($pakar);
         return redirect('/admin-pakar');

        //
    }
}
