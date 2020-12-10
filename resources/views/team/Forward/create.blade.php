@extends('layouts.masteradmin')
@section('title', 'Add Forward')
@section('container')



<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">


            <div class="col-lg-7 col-md-10">
                <h1 class="display-2 text-white">Add Forward</h1>
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
                <form method="POST" action="{{route('dashboardplayer.store')}}" enctype="multipart/form-data">
                    @csrf
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                  <button class="btn btn-primary mb-3" type="submit"><i class="fas fa-fw fa-user-plus"></i>Tambah Forward</button>
                  <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="nama_pemain">Nama Pemain</label>
                              <input type="text" id="nama_pemain" name="nama_pemain" class="form-control @error('nama_pemain') is-invalid @enderror" placeholder="Masukan Nama Pemain" value="{{ old('nama_pemain')}}">
                              @error('nama_pemain')
                                  <div class="invalid-feedback">{{ $message}} </div>
                              @enderror
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label " for="nomer_pemain">Nomer Pemain</label>
                              <input type="text" id="nomer_pemain" name="nomer_pemain" class="form-control @error('nomer_pemain') is-invalid @enderror" placeholder="Masukan Nomer Pemain" value="{{ old('nomer_pemain')}}">
                              @error('nomer_pemain')
                              <div class="invalid-feedback">{{ $message}}</div>
                              @enderror
                            </div>
                          </div>


                        </div>


                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label " for="penampilan">Penampilan</label>
                              <input type="text" id="penampilan" name="penampilan" class="form-control " placeholder="Jumlah Penampilan" value="{{ old('penampilan')}}">
                              @error('penampilan')
                              <div class="invalid-feedback">{{ $message}}</div>
                              @enderror
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="goal">Goal</label>
                              <input type="text" id="goal" name="goal" class="form-control form-control-alternative" placeholder="Jumlah Goal" value="{{ old('goal')}}">
                            </div>
                          </div>

                          <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label" for="assist">Assist</label>
                                <input type="text" id="assist" name="assist" class="form-control form-control-alternative" placeholder="Jumlah assist" value="{{ old('assist')}}">
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label" for="position">Position</label>
                                <input type="text" id="position" name="position" class="form-control form-control-alternative" placeholder="Pilih Position" value="{{ old('position')}}">
                              </div>
                            </div>



                        </div>


                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="shot">Shot</label>
                              <input type="text" id="shot" name="shot" class="form-control form-control-alternative" placeholder="Jumalah Shot" value="{{ old('shot')}}">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="shot_ontarget">Goal On Target</label>
                              <input type="text" id="shot_ontarget" name="shot_ontarget" class="form-control form-control-alternative" placeholder="Jumlah Goal On Target" value="{{ old('goal on target')}}">
                            </div>
                          </div>
                        </div>
                      </div>




                      <!-- Description -->
                      <h6 class="heading-small text-muted mb-4"> </h6>
                      <div class="pl-lg-4">
                        <div class="form-group">
                          <label for="gambar">Gambar</label>
                          <input type="file"  id="gambar" name="gambar" class="form-control form-control-alternative" placeholder="Pilih Gambar" value="{{ old('gambar')}}">
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
