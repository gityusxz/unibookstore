<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public $kategori;
    public function __construct()
    {
       $this->kategori = new Kategori;
       $this->middleware('auth');
       
    }
    public function index()
    {
        $kategori = Kategori::all();

        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'kategori' => 'required|unique:kategoris,nama_kategori|min:3|max:50'
            
           ];

        $messages = [
            'required' => ":attribute ga boleh kosong",
            'min' => ":attribute kurang pas input ulang",
            'max' => ":attribute inputan terlalu banyak",
            'unique' => ":attribute sudah ada, input yang lain"
            
        ];
        $this->validate($request, $rules, $messages);

        $this->kategori->nama_kategori = $request->kategori;
        
        $this->kategori->save();

        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);

        return view('kategori.edit', compact('kategori'));
    }

   
    public function update(Request $request, $id)
    {
        $update = Kategori::findOrFail($id);

        if ($update->nama_kategori == $request->nama){

            return redirect()->route('admin.index');
        }else{
            $rules = [
                'nama' => 'required|unique:kategoris,nama_kategori|min:3|max:50'
                
                ];
    
            $messages = [
                'required' => ":attribute ga boleh kosong",
                'min' => ":attribute kurang pas input ulang",
                'max' => ":attribute inputan terlalu banyak",
                'unique' => ":attribute sudah ada, input yang lain"
                
            ];
            $this->validate($request, $rules, $messages);
    
            $update->nama_kategori = $request->nama;
            
    
            $update->save();
    
            return redirect()->route('admin.index');
        }
            
        
        
    }

 
    public function destroy(Kategori $kategori)
    {
        //
    }


    public function delete($id)
     {
         $destroy = Kategori::findOrFail($id);
        
         $destroy->delete();
             
         return redirect()->route('admin.index');
     }
}
