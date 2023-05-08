@extends('template.main')
@section('konten')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mt-4">
       
      <div class="card-header">
            <h5 class="page-tittle" style="float:left">Data Kebutuhan Buku</h5>
      </div>   
      
       
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th style="width: 5%">No</th>
                <th>Nama Buku</th>
                <th>Penerbit</th>
                <th>Stok</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              
              
             {{-- looping data disini masze --}}
             @foreach($home as $item)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->nama_buku}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->stok}}</td>
               
              </tr>
              
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>



    
@endsection

