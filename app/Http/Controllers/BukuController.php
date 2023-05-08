<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class BukuController extends Controller
{
   
    public $buku;
    public function __construct()
    {
       $this->buku = new Buku;
       $this->middleware('auth');
       
    }

    public function index()
    {
        
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

    public function store(Request $request)
    {
        $rules = [
            'idBuku' => 'required|unique:bukus,kode_buku|min:3|max:50',
            'penerbit' => 'required|max:50',
            'kategori' => 'required|max:50',
            'stok' => 'required|max:15',
            'harga' => 'required|max:100',
            'buku' => 'required|max:100'
            
           ];

        $messages = [
            'required' => ":attribute ga boleh kosong",
            'min' => ":attribute kurang pas input ulang",
            'max' => ":attribute inputan terlalu banyak",
            'unique' => ":attribute sudah ada, input yang lain"
            
            
        ];
        $this->validate($request, $rules, $messages);

        $this->buku->nama_buku = $request->buku;
        $this->buku->kode_buku = $request->idBuku;
        $this->buku->stok = $request->stok;
        $this->buku->harga = $request->harga;
        $this->buku->kategori_id = $request->kategori;
        $this->buku->penerbit_id = $request->penerbit;
        
        $this->buku->save();

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        //
    }

   
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $penerbit = Penerbit::all();
        $kategori = Kategori::all();

        return view('buku.edit', compact('buku', 'penerbit', 'kategori'));
    }

  
    public function update(Request $request, $id)
    {
        $update = Buku::findOrFail($id);

        if($update->kode_buku == $request->idBuku ){
            return redirect()->route('admin.index');
        }else{
            $rules = [
                'idBuku' => 'required|unique:bukus,kode_buku|min:3|max:50',
                'penerbit' => 'required|max:50',
                'kategori' => 'required|max:50',
                'stok' => 'required|max:15',
                'harga' => 'required|max:100',
                'buku' => 'required|max:100'
                
               ];
    
            $messages = [
                'required' => ":attribute ga boleh kosong",
                'min' => ":attribute kurang pas input ulang",
                'max' => ":attribute inputan terlalu banyak",
                'unique' => ":attribute sudah ada, input yang lain"
                
                
            ];
            $this->validate($request, $rules, $messages);
    
            $update->nama_buku = $request->buku;
            $update->kode_buku = $request->idBuku;
            $update->stok = $request->stok;
            $update->harga = $request->harga;
            $update->kategori_id = $request->kategori;
            $update->penerbit_id = $request->penerbit;
            
            $update->save();
    
            return redirect()->route('admin.index');
        }


        

    }

   
    public function destroy(Buku $buku)
    {
        //
    }

    public function delete($id)
     {
         $destroy = Buku::findOrFail($id);
        
         $destroy->delete();
             
         return redirect()->route('admin.index');
     }
}
