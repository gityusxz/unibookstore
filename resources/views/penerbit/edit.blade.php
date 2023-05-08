@extends('template.main')
@section('konten')
<div class="container-xxl flex-grow-1 container-p-y">  
<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Edit Data Penerbit</h5>
        <small class="text-muted float-end"> edit data penerbit</small>
      </div>
      
      <div class="card-body">
        <form action="{{route('penerbit.update', $penerbit->id)}}" method="post" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="row ">
            <div class="col-md-6">
            <label class=" col-form-label" for="basic-icon-default-fullname">ID Penerbit</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"
                  ><i class="fa fa-box-archive"></i
                ></span>
                <input
                  type="text"
                  value="{{$penerbit->kode_penerbit}}"
                  class="form-control {{ $errors->first('idPenerbit') ? "is-invalid" : "" }}"
                  id="basic-icon-default-fullname"
                  placeholder="masukan ID penerbit"
                  name="idPenerbit"
                />
               
              </div>
              @error('idPenerbit')
              <small class="text-danger">
                  {{ $message }}
              </small>
              @enderror
            </div>

            <div class="col-md-6">
              <label class=" col-form-label" for="basic-icon-default-fullname">Nama Penerbit</label>
                <div class="input-group input-group-merge">
                  <span id="basic-icon-default-fullname2" class="input-group-text"
                    ><i class="fa fa-box-archive"></i
                  ></span>
                  <input
                    type="text"
                    value="{{$penerbit->nama}}"
                    class="form-control {{ $errors->first('penerbit') ? "is-invalid" : "" }}"
                    id="basic-icon-default-fullname"
                    placeholder="masukan nama"
                    name="penerbit"
                  />
                 
                </div>
                @error('penerbit')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
              </div>

              <div class="col-md-6">
                <label class=" col-form-label" for="basic-icon-default-fullname">Kota</label>
                  <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"
                      ><i class="fa fa-box-archive"></i
                    ></span>
                    <input
                      type="text"
                      value="{{$penerbit->kota}}"
                      class="form-control {{ $errors->first('kota') ? "is-invalid" : "" }}"
                      id="basic-icon-default-fullname"
                      placeholder="masukan kategori"
                      name="kota"
                    />
                   
                  </div>
                  @error('kota')
                  <small class="text-danger">
                      {{ $message }}
                  </small>
                  @enderror
                </div> 
                
                <div class="col-md-6">
                  <label class=" col-form-label" for="basic-icon-default-fullname">Telepon</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text"
                        ><i class="fa fa-box-archive"></i
                      ></span>
                      <input
                        type="number"
                        value="{{$penerbit->telepon}}"
                        class="form-control {{ $errors->first('telepon') ? "is-invalid" : "" }}"
                        id="basic-icon-default-fullname"
                        placeholder="masukan telepon"
                        name="telepon"
                      />
                     
                    </div>
                    @error('telepon')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                  </div>

                  <div class="col-md-12">
                    <label class=" col-form-label" for="basic-icon-default-fullname">Alamat</label>
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"
                          ><i class="fa fa-box-archive"></i
                        ></span>
                        <input
                          type="text"
                          value="{{$penerbit->alamat}}"
                          class="form-control {{ $errors->first('alamat') ? "is-invalid" : "" }}"
                          id="basic-icon-default-fullname"
                          placeholder="masukan alamat"
                          name="alamat"
                        />
                       
                      </div>
                      @error('alamat')
                      <small class="text-danger">
                          {{ $message }}
                      </small>
                      @enderror
                    </div>
           
  
            <div class="modal-footer mt-3">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </form>
      </div>


</div>
</div>
</div>
           
          
           

          
              


@endsection      
         
         
          
       
      