@extends('layouts.masteradmin')
@section('title', 'Edit Keeper')
@section('container')



<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">


            <div class="col-lg-7 col-md-10">
                <h1 class="display-2 text-white">Edit Keeper</h1>
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
                <form method="POST" action="{{ route('dashboardkiper.update',$kiper->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                  <button class="btn btn-primary mb-3" type="submit"><i class="fas fa-fw fa-user-plus"></i> Update Keeper</button>
                  <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="nama_pemain">Nama Pemain</label>
                              <input type="text" id="nama_pemain" name="nama_pemain" class="form-control @error('nama_pemain') is-invalid @enderror" placeholder="Masukan Nama Pemain" value="{{ $kiper->nama_pemain }}">
                              @error('nama_pemain')
                                  <div class="invalid-feedback">{{ $message}} </div>
                              @enderror
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label " for="nomer_pemain">Nomer Pemain</label>
                              <input type="text" id="nomer_pemain" name="nomer_pemain" class="form-control @error('nomer_pemain') is-invalid @enderror" placeholder="Masukan Nomer Pemain" value="{{ $kiper->nomer_pemain }}">
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
                              <input type="text" id="penampilan" name="penampilan" class="form-control " placeholder="Jumlah Penampilan" value="{{ $kiper->penampilan }}">
                              @error('penampilan')
                              <div class="invalid-feedback">{{ $message}}</div>
                              @enderror
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="saves">Saves</label>
                              <input type="text" id="saves" name="saves" class="form-control form-control-alternative" placeholder="Jumlah Saves" value="{{ $kiper->saves }}">
                            </div>
                          </div>

                          <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label" for="clearances">Clearances</label>
                                <input type="text" id="clearances" name="clearances" class="form-control form-control-alternative" placeholder="Jumlah Clearances" value="{{ $kiper->clearances }}">
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label" for="position">Position</label>
                                <input type="text" id="position" name="position" class="form-control form-control-alternative" placeholder="Pilih Position" value="{{ $kiper->position }}">
                              </div>
                            </div>



                        </div>


                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="catches">Catches</label>
                              <input type="text" id="catches" name="catches" class="form-control form-control-alternative" placeholder="Jumalah Catches" value="{{ $kiper->catches }}">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="goal_conceded">Goal Conceded</label>
                              <input type="text" id="goal_conceded" name="goal_conceded" class="form-control form-control-alternative" placeholder="Jumlah Goal Conceded" value="{{ $kiper->goal_conceded }}">
                            </div>
                          </div>
                        </div>
                      </div>




                      <!-- Description -->
                      <h6 class="heading-small text-muted mb-4"> </h6>
                      <div class="pl-lg-4">
                        <div class="form-group">
                          <label for="gambar">Gambar</label>
                          <input type="file"  id="gambar" name="gambar" class="form-control form-control-alternative" placeholder="Pilih Gambar" value="">
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
