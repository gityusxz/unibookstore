@extends('template.main')
@section('konten')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mt-4">
       
      <div class="card-header">
            <h5 class="page-tittle" style="float:left">Data Buku</h5>
            
      </div>
       
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th style="width: 10%">ID Buku</th>
                <th>Kategori</th>
                <th>Nama Buku</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Penerbit</th>
                
                
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
             
              
             {{-- looping data disini masze --}}
             @foreach($home as $item)
              <tr>
                <td>{{$item->kode_buku}}</td>
                <td>{{$item->nama_kategori}}</td>
                <td>{{$item->nama_buku}}</td>
                <td>{{ number_format($item->harga,0,",",".") }}</td>
                <td>{{$item->stok}}</td>
                <td>{{$item->nama}}</td>
                
                
                
              </tr>
              
              @endforeach
            </tbody>
            
          </table>
        </div>
      </div>
    </div>
    
@endsection

