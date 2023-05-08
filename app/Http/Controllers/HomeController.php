<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Penerbit;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
   
    public function index(Request $request)
    {
        

        $cari =  $request->search;
        $home = DB::table('bukus')
        ->join('kategoris','bukus.kategori_id','=','kategoris.id')
        ->join('penerbits','bukus.penerbit_id','=','penerbits.id')
        ->select('bukus.*','kategoris.*','penerbits.*')
        ->where('bukus.nama_buku','LIKE', "%$cari%")
        ->get();
       
        //dd($home);
       // return view('index', ['home' => $home]);


        return view('index', compact('home'));
    }

    public function admin()
    {
        
    } 


   
}
