<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Penerbit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengadaanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        $home = DB::table('bukus')
        ->join('penerbits','bukus.penerbit_id','=','penerbits.id')
        ->select('bukus.*','penerbits.*')
        ->where('bukus.stok','<','15')
        ->get();

        return view('pengadaan', compact('home'));
        
    }
}
