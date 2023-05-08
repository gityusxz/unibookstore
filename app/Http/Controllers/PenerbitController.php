<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public $penerbit;
    public function __construct()
    {
       $this->penerbit = new Penerbit;
       $this->middleware('auth');
       
    }
    public function index()
    {
        return view('penerbit.index');
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
        $rules = [
            'idPenerbit' => 'required|unique:penerbits,kode_penerbit|min:3|max:50',
            'penerbit' => 'required|unique:penerbits,nama|min:3|max:50',
            'kota' => 'required|min:3|max:50',
            'telepon' => 'required|min:3|max:15',
            'alamat' => 'required|min:3|max:100'
            
           ];

        $messages = [
            'required' => ":attribute ga boleh kosong",
            'min' => ":attribute kurang pas input ulang",
            'max' => ":attribute inputan terlalu banyak",
            'unique' => ":attribute sudah ada, input yang lain"
            
            
        ];
        $this->validate($request, $rules, $messages);

        $this->penerbit->nama = $request->penerbit;
        $this->penerbit->kode_penerbit = $request->idPenerbit;
        $this->penerbit->kota = $request->kota;
        $this->penerbit->telepon = $request->telepon;
        $this->penerbit->alamat = $request->alamat;
        
        $this->penerbit->save();

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function show(Penerbit $penerbit)
    {
        //
    }

   
    public function edit($id)
    {
        $penerbit = Penerbit::findOrFail($id);

        return view('penerbit.edit', compact('penerbit'));
    }

   
    public function update(Request $request, $id)
    {
        $update = Penerbit::findOrFail($id);
 

        if ($update->nama == $request->penerbit && $update->kode_penerbit == $request->idPenerbit){
            return redirect()->route('admin.index');
        }else{
            $rules = [
                'idPenerbit' => 'required|unique:penerbits,kode_penerbit|min:3|max:50',
                'penerbit' => 'required|unique:penerbits,nama|min:3|max:50',
                'kota' => 'required|min:3|max:50',
                'telepon' => 'required|min:3|max:15',
                'alamat' => 'required|min:3|max:100'
                
               ];
    
            $messages = [
                'required' => ":attribute ga boleh kosong",
                'min' => ":attribute kurang pas input ulang",
                'max' => ":attribute inputan terlalu banyak",
                'unique' => ":attribute sudah ada, input yang lain"
                
                
            ];
            $this->validate($request, $rules, $messages);
    
            $update->nama = $request->penerbit;
            $update->kode_penerbit = $request->idPenerbit;
            $update->kota = $request->kota;
            $update->telepon = $request->telepon;
            $update->alamat = $request->alamat;
            
            $update->save();
    
            return redirect()->route('admin.index');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penerbit  $penerbit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penerbit $penerbit)
    {
        //
    }

    public function delete($id)
     {
         $destroy = Penerbit::findOrFail($id);
        
         $destroy->delete();
             
         return redirect()->route('admin.index');
     }
}
