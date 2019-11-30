<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gejala;
use App\admin;
use App\hasil;
use App\diagnosa;


class DiagnosaController extends Controller
{
    public function index()
    {
        return view('user.diagnosa');
    }
     public function start()
    {
    	 $gejalaA = gejala::where('jenis', ['Sisik'])->get();
    	 $gejalaB = gejala::where('jenis', ['Sirip dan Ekor'])->get();
         $gejalaC = gejala::where('jenis', ['Mata'])->get();
         $gejalaD = gejala::where('jenis', ['Sikap'])->get();
         $gejalaE = gejala::where('jenis', ['Kondisi dan Bentuk Tubuh'])->get();
         $gejalaF = gejala::where('jenis', ['Gejala Lain'])->get();
        return view('user.kuis1',compact('gejalaA','gejalaB','gejalaC','gejalaD','gejalaE','gejalaF'));
    }
     public function hasil()
    {
                 
    	 $hasil = hasil::with('latepost')->get();
    	 $diagnosaA = diagnosa::where('value', ['87'])->get();
         $diagnosaB = diagnosa::where('value', ['100'])->get();
    	 $diagnosaC = diagnosa::where('value', ['108'])->get();
         $diagnosaD = diagnosa::where('value', ['81'])->get();
         $diagnosaE = diagnosa::where('value', ['80'])->get();
         $diagnosaF = diagnosa::where('value', ['96'])->get();
         $diagnosaG = diagnosa::where('value', ['88'])->get();
         $diagnosaH = diagnosa::where('value', ['92'])->get();
         $diagnosaI = diagnosa::where('value', ['109'])->get();
         $diagnosaJ = diagnosa::where('value', ['103'])->get();
         $diagnosaK = diagnosa::where('value', ['97'])->get();
         $diagnosaL = diagnosa::where('value', ['112'])->get();
         $diagnosaM = diagnosa::where('value', ['114'])->get();
         $diagnosaN = diagnosa::where('value', ['91'])->get();
         
        


        return view('user.hasil',compact('diagnosaA','diagnosaB','diagnosaC','diagnosaD','diagnosaE','diagnosaF','diagnosaG','diagnosaH','diagnosaI','diagnosaJ','diagnosaK','diagnosaL','diagnosaM','diagnosaN','hasil'));
    }

    public function creategejala()
    {
         $admin = admin::all();
         $gejala = gejala::all();
       
        return view('admin.tambahgejala',['admin'=>$admin],['gejala' => $gejala]);
        
    }


    public function diagnosa()
    {
         $admin = admin::all();
         $diagnosa = diagnosa::all();
       
        return view('admin.diagnosa',['admin'=>$admin],['diagnosa' => $diagnosa]);
        
    }


public function creatediagnosa()
    {
         $admin = admin::all();
         $diagnosa = diagnosa::all();
       
        return view('admin.tambahdiagnosa',['admin'=>$admin],['diagnosa' => $diagnosa]);
        
    }

    


public function storegejala(Request $request)
    {
        
        
         $gejala = "NO";
        if($request->hasFile('foto'))
        {
            $destination = "fotogejala";
            $foto = $request->file('foto');
            $foto->move($destination, $foto->getClientOriginalName());
            $request->foto = $request->file('foto')->getClientOriginalName();
            $gejala = 'Ya';

        }
        
        if($gejala=='Ya'){

        $gejala = new gejala;
        $gejala->nama = $request->nama;
        $gejala->jenis = $request->jenis;
        $gejala->value = $request->value;
        $gejala->foto = $request->foto;
        
        $gejala->save();     
        
        }      
        return redirect('/admin-gejala');
    }


public function store(Request $request)
    {
        
        
        $total = $request->gejala1 + $request->gejala2 + $request->gejala3 + $request->gejala4 + $request->gejala5 + $request->gejala6 ;


        $hasil = new hasil;
        $hasil->gejala1 = $request->gejala1;
        $hasil->gejala2 = $request->gejala2;
        $hasil->gejala3 = $request->gejala3;
        $hasil->gejala4 = $request->gejala4;
        $hasil->gejala5 = $request->gejala5;
        $hasil->gejala6 = $request->gejala6;
     
        $hasil->total = $total;
        
        
        $hasil->save();     
        
           
        return redirect('/user-hasildiagnosa');
    }
public function storediagnosa(Request $request)
    {
        
        
       

        $diagnosa = new diagnosa;
        $diagnosa->nama = $request->nama;
        $diagnosa->value = $request->value;
       
        
        
        $diagnosa->save();     
        
           
        return redirect('/admin-diagnosa');
    }






    public function editgejala($id)

    {
         $admin = admin::all();
        $gejala = gejala::find($id);
        return view('admin.editgejala',['admin'=>$admin],['gejala' => $gejala]);
    }


    public function editdiagnosa($id)

    {
         $admin = admin::all();
        $diagnosa = diagnosa::find($id);
        return view('admin.editdiagnosa',['admin'=>$admin],['diagnosa' => $diagnosa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updategejala(Request $request, $id)
    {
        $gejala = gejala::find($id);
         $gejala->update($request->all());
         
        if ($request ->hasFile('foto')) {
            $destination= "fotogejala";
              $request->file('foto')->move($destination,$request->file('foto')->getClientOriginalName());
              $gejala->foto = $request->file('foto')->getClientOriginalName();
              $gejala->save();
          }
        return redirect('/admin-gejala');

    }
    public function updatediagnosa(Request $request, $id)
    {
        $diagnosa = diagnosa::find($id);
         $diagnosa->update($request->all());
         
        
              $diagnosa->save();
          
        return redirect('/admin-diagnosa');

    }
     public function deletegejala($id)
    {    

         $gejala = gejala::find($id);
         $gejala->delete($gejala);
         return redirect('/admin-gejala');

        //
    }
     public function deletediagnosa($id)
    {    

         $diagnosa = diagnosa::find($id);
         $diagnosa->delete($diagnosa);
         return redirect('/admin-diagnosa');

        //
    }

     public function deletehasil($id)
    {    

      hasil::where('hasil_id',$id)->delete();
        
         return redirect('/pengguna-diagnosa');

        //
    }
}
