@extends('template.main')
@section('konten')
<div class="container-xxl flex-grow-1 container-p-y">  
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Edit Kategori</h5>
        <small class="text-muted float-end"> edit kategori</small>
      </div>
      <div class="card-body">
        <form action="{{route('kategori.update', $kategori['id'])}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
          <div class="row mb-3">
            <div class="col-md-12">
            <label class=" col-form-label" for="basic-icon-default-fullname">Nama Kategori</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                  ><i class="fa fa-box-archive"></i
                ></span>
                <input
                  type="text"
                  value="{{$kategori['nama_kategori']}}"
                  class="form-control {{ $errors->first('nama') ? "is-invalid" : "" }}"
                  id="basic-icon-default-fullname"
                  placeholder="masukan nama kategori"
                  name="nama"
                />
               
              </div>
              @error('nama')
              <small class="text-danger">
                  {{ $message }}
              </small>
              @enderror
            </div>

           <center><button type="submit" class="btn btn-primary mt-4">Update</button></center>
        </div>
    </form>
  </div>
</div>
</div>
</div>
           
          
           

          
              


@endsection      
         
         
          
       
      