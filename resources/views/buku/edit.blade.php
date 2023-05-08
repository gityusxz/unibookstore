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
              <form action="{{route('buku.update', $buku->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row ">
                  <div class="col-md-6">
                  <label class=" col-form-label" for="basic-icon-default-fullname">ID Buku</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text"
                        ><i class="fa fa-box-archive"></i
                      ></span>
                      <input
                        type="text"
                        value="{{$buku->kode_buku}}"
                        class="form-control {{ $errors->first('idBuku') ? "is-invalid" : "" }}"
                        id="basic-icon-default-fullname"
                        placeholder="masukan ID buku"
                        name="idBuku"
                      />
                     
                    </div>
                    @error('idBuku')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                    @enderror
                  </div>

                  <div class="col-md-6">
                    <label class=" col-form-label" for="basic-icon-default-fullname">Kategori</label>
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"
                          ><i class="fa fa-box-archive"></i
                        ></span>
                        <select name="kategori" class="form-control {{ $errors->first('kategori') ? "is-invalid" : "" }}" >
                          @foreach ($kategori as $value)
                          <option hidden>Select Kategori</option>
                          <option  @if ($value->id == $buku['kategori_id'])
                            {{ "selected" }}
                        @endif 
                          value="{{$value->id}}">{{$value->nama_kategori}}</option>
                          @endforeach
                      </select>
                       
                      </div>
                      @error('kategori')
                      <small class="text-danger">
                          {{ $message }}
                      </small>
                      @enderror
                    </div>

                    <div class="col-md-6">
                      <label class=" col-form-label" for="basic-icon-default-fullname">Nama Buku</label>
                        <div class="input-group input-group-merge">
                          <span id="basic-icon-default-fullname2" class="input-group-text"
                            ><i class="fa fa-box-archive"></i
                          ></span>
                          <input
                            type="text"
                            value="{{$buku->nama_buku}}"
                            class="form-control {{ $errors->first('buku') ? "is-invalid" : "" }}"
                            id="basic-icon-default-fullname"
                            placeholder="masukan nama buku"
                            name="buku"
                          />
                         
                        </div>
                        @error('buku')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                      </div> 
                      
                      <div class="col-md-6">
                        <label class=" col-form-label" for="basic-icon-default-fullname">Penerbit</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="fa fa-box-archive"></i
                            ></span>
                            <select name="penerbit" class="form-control {{ $errors->first('penerbit') ? "is-invalid" : "" }}" >
                              @foreach ($penerbit as $value)
                              <option hidden>Select Penerbit</option>
                              <option  @if ($value->id == $buku['penerbit_id'])
                                {{ "selected" }}
                            @endif 
                              value="{{$value->id}}">{{$value->nama}}</option>
                              @endforeach
                          </select>
                           
                          </div>
                          @error('penerbit')
                          <small class="text-danger">
                              {{ $message }}
                          </small>
                          @enderror
                        </div>

                      <div class="col-md-6">
                        <label class=" col-form-label" for="basic-icon-default-fullname">Harga</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="fa fa-box-archive"></i
                            ></span>
                            <input
                              type="number"
                              value="{{$buku->harga}}"
                              class="form-control {{ $errors->first('harga') ? "is-invalid" : "" }}"
                              id="basic-icon-default-fullname"
                              placeholder="masukan harga"
                              name="harga"
                            />
                           
                          </div>
                          @error('harga')
                          <small class="text-danger">
                              {{ $message }}
                          </small>
                          @enderror
                        </div>

                        <div class="col-md-6">
                          <label class=" col-form-label" for="basic-icon-default-fullname">Stok</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="fa fa-box-archive"></i
                              ></span>
                              <input
                                type="number"
                                value="{{$buku->stok}}"
                                class="form-control {{ $errors->first('stok') ? "is-invalid" : "" }}"
                                id="basic-icon-default-fullname"
                                placeholder="masukan stok"
                                name="stok"
                              />
                             
                            </div>
                            @error('stok')
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


</div>
</div>
</div>
           
          
           

          
              


@endsection      
         
         
          
       
      