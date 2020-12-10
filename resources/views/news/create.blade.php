@extends('layouts.masteradmin')
@section('title', 'Create News')
@section('container')



<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">


            <div class="col-lg-7 col-md-10">
                <h1 class="display-2 text-white">News</h1>
                <p class="text-white mt-0 mb-5">on this page you can add, change, and delete data in the table </p>

              </div>

          </div>

        </div>
        <!-- Card stats -->
        <div class="row">
          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-12">
       <!-- Dark table -->

    <div class="row">
      <div class="col">
        <div class="card bg-default shadow">

            <div class="card-body">
                <form method="POST" action="{{route('dashboardnews.store')}}" enctype="multipart/form-data">
                    @csrf
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                  <button class="btn btn-primary mb-3" type="submit"><i class="fas fa-fw fa-user-plus"></i> Tambah</button>
                  <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="judul">Judul</label>
                              <input type="text" id="judul" name="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukan Judul" value="">
                              @error('judul')
                                  <div class="invalid-feedback">{{ $message}} </div>
                              @enderror
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label " for="isi_berita">Isi Berita</label>
                              <input type="text" id="isi_berita" name="isi_berita" class="form-control @error('isi_berita') is-invalid @enderror" placeholder="Masukan Isi Berita" value="">
                              @error('isi_berita')
                              <div class="invalid-feedback">{{ $message}}</div>
                              @enderror
                            </div>
                          </div>


                        </div>


                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label class="form-control-label " for="gambar">Gambar</label>
                              <input type="file" id="gambar" name="gambar" class="form-control " placeholder="Jumlah gambar" value="">
                              @error('gambar')
                              <div class="invalid-feedback">{{ $message}}</div>
                              @enderror
                            </div>
                          </div>


                        </div>


                </form>
              </div>
        </div>
      </div>
    </div>

      </div>
    </div>





@endsection
