@extends('template.main')
@section('konten')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-md-12 mb-4 order-0">
        <div class="card">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title text-primary">Selamat datang {{ Auth::user()->name }} di Bukukita 🎉</h5>
                <p class="mb-4">
                  You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                  your profile.
                </p>

                {{-- tambah data buku --}}
                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#inputBuku" class="btn btn-sm btn-outline-primary">Tambah Buku</a>
                
                
                <div class="modal fade" id="inputBuku" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">Tambah data buku</h5>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="card-body">
                        <form action="{{route('buku.store')}}" method="post" enctype="multipart/form-data">
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
                                    <option value="{{$value->id}}">{{$value->nama_kategori}}</option>
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
                                        <option value="{{$value->id}}">{{$value->nama}}</option>
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
                                        type="harga"
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
                                          type="text"
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
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Batal
                              </button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- tambah data buku --}}

                {{-- tambah kategori --}}
                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#inputKategori" class="btn btn-sm btn-outline-primary">Tambah Kategori</a>
                <div class="modal fade" id="inputKategori" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">Tambah kategori</h5>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="card-body">
                      <form action="{{route('kategori.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row ">
                          <div class="col-md-12">
                          <label class=" col-form-label" for="basic-icon-default-fullname">Nama Kategori</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="fa fa-box-archive"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control {{ $errors->first('kategori') ? "is-invalid" : "" }}"
                                id="basic-icon-default-fullname"
                                placeholder="masukan kategori"
                                name="kategori"
                              />
                             
                            </div>
                            @error('kategori')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                          </div>
                         
                
                          <div class="modal-footer mt-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                              Batal
                            </button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                </div>

                {{-- tambah kategori --}}

                


                {{-- tambah penerbit --}}
                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#inputPenerbit" class="btn btn-sm btn-outline-primary">Tambah Penerbit</a>
                <div class="modal fade" id="inputPenerbit" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">Tambah Penerbit</h5>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <div class="card-body">
                      <form action="{{route('penerbit.store')}}" method="post" enctype="multipart/form-data">
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
                                    class="form-control {{ $errors->first('kota') ? "is-invalid" : "" }}"
                                    id="basic-icon-default-fullname"
                                    placeholder="masukan kota"
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
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                              Batal
                            </button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                </div>
                {{-- tambah penerbit --}}

                
              </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-4">
                <img
                  src="{{asset('sneat')}}/assets/img/illustrations/man-with-laptop-light.png"
                  height="140"
                  alt="View Badge User"
                  data-app-dark-img="illustrations/man-with-laptop-dark.png"
                  data-app-light-img="illustrations/man-with-laptop-light.png"
                />
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="nav-align-top mb-4">
        <ul class="nav nav-pills mb-3" role="tablist">
          <li class="nav-item">
            <button
              type="button"
              class="nav-link active"
              role="tab"
              data-bs-toggle="tab"
              data-bs-target="#navs-pills-top-home"
              aria-controls="navs-pills-top-home"
              aria-selected="true"
            >Buku
            </button>
          </li>
          <li class="nav-item">
            <button
              type="button"
              class="nav-link"
              role="tab"
              data-bs-toggle="tab"
              data-bs-target="#navs-pills-top-profile"
              aria-controls="navs-pills-top-profile"
              aria-selected="false"
            >Kategori
            </button>
          </li>
          <li class="nav-item">
            <button
              type="button"
              class="nav-link"
              role="tab"
              data-bs-toggle="tab"
              data-bs-target="#navs-pills-top-messages"
              aria-controls="navs-pills-top-messages"
              aria-selected="false"
            >Penerbit</button>
          </li>
        </ul>
        <div class="tab-content">
          {{-- tabel buku --}}
          <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
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
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                {{-- looping data disini masze --}}
                 @foreach($buku as $item)
                  <tr>
                    <td>{{$item->kode_buku}}</td>
                    <td>{{$item->kategori->nama_kategori}}</td>
                    <td>{{$item->nama_buku}}</td>
                    <td>{{ number_format($item->harga,0,",",".") }}</td>
                    <td>{{$item->stok}}</td>
                    <td>{{$item->penerbit->nama}}</td>
                    <td>
                        <a href="{{route('buku.edit', $item->id)}}">
                            <button type="button" class="btn btn-icon btn-outline-warning">
                              <i class="fa fa-edit"></i>
                            </button> &nbsp;
                            </a>
                            <a href="{{route('buku.delete', $item->id)}}">
                            <button onclick="return confirm('yakin mau apus?')" type="button" class="btn btn-icon btn-outline-danger">
                              <i class="fa fa-trash"></i>
                            </button>
                        </a>
                    </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          {{-- tabel buku --}}

          {{-- tabel kategori --}}
          <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th style="width: 10%">No</th>
                    <th>Nama Kategori</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  @php
                  $no = 1;
                  @endphp
                  
                 {{-- looping data disini masze --}}
                 @foreach($kategori as $item)
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$item->nama_kategori}}</td>
                    <td>
                      <a href="{{route('kategori.edit', $item->id)}}">
                            <button type="button" class="btn btn-icon btn-outline-warning">
                              <i class="fa fa-edit"></i>
                            </button> &nbsp;
                          </a>
                            <a href="{{route('kategori.delete', $item->id)}}">
                            <button onclick="return confirm('yakin mau apus?')" type="button" class="btn btn-icon btn-outline-danger">
                              <i class="fa fa-trash"></i>
                            </button>
                          </a>


                    </td>
                  </tr>
                  @php
                  $no++;
                  @endphp
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          {{-- tabel kategori --}}

          {{-- tabel penerbit --}}
          <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
            <div class="table-responsive text-nowrap">
              <table class="table">
                <thead>
                  <tr>
                    <th style="width: 10%">ID Penerbit</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Telepon</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                 
                {{-- looping data disini masze --}}
                 @foreach($penerbit as $item)
                  <tr>
                    <td>{{$item->kode_penerbit}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>{{$item->kota}}</td>
                    <td>{{$item->telepon}}</td>
                    <td>
                        <a href="{{route('penerbit.edit', $item->id)}}">
                            <button type="button" class="btn btn-icon btn-outline-warning">
                              <i class="fa fa-edit"></i>
                            </button> &nbsp;
                            </a>
                            <a href="{{route('penerbit.delete', $item->id)}}">
                            <button onclick="return confirm('yakin mau apus?')" type="button" class="btn btn-icon btn-outline-danger">
                              <i class="fa fa-trash"></i>
                            </button>
                        </a>
                    </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          {{-- tabel penerbit --}}
        </div>

        

    </div>
</div>



@endsection