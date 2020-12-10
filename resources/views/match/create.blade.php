@extends('layouts.masteradmin')
@section('title', 'Match')
@section('container')



<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">


            <div class="col-lg-7 col-md-10">
                <h1 class="display-2 text-white">Match</h1>
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
                <form method="POST" action="{{route('dashboardgames.store')}}" enctype="multipart/form-data">
                    @csrf
                  <h6 class="heading-small text-muted mb-4">User information</h6>
                  <button class="btn btn-primary mb-3" type="submit"><i class="fas fa-fw fa-user-plus"></i> Tambah</button>
                  <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label" for="team_musuh">Lawan Tanding</label>
                              <input type="text" id="team_musuh" name="team_musuh" class="form-control @error('team_musuh') is-invalid @enderror" placeholder="Masukan team_musuh" value="{{ old('team_musuh')}}">
                              @error('team_musuh')
                                  <div class="invalid-feedback">{{ $message}} </div>
                              @enderror
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="form-group">
                              <label class="form-control-label " for="negara">Negara</label>
                              <input type="text" id="negara" name="negara" class="form-control @error('negara') is-invalid @enderror" placeholder="Masukan Nomer Pemain" value="{{ old('negara')}}">
                              @error('negara')
                              <div class="invalid-feedback">{{ $message}}</div>
                              @enderror
                            </div>
                          </div>

                          <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label " for="date">Date</label>
                                <input type="date" id="date" name="date" class="form-control @error('date') is-invalid @enderror" placeholder="Masukan Nomer Pemain" value="{{ old('date')}}">
                                @error('date')
                                <div class="invalid-feedback">{{ $message}}</div>
                                @enderror
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label " for="liga">Liga</label>
                                <input type="text" id="liga" name="liga" class="form-control @error('liga') is-invalid @enderror" placeholder="Masukan Nomer Pemain" value="{{ old('liga')}}">
                                @error('liga')
                                <div class="invalid-feedback">{{ $message}}</div>
                                @enderror
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label " for="score">Score</label>
                                <input type="text" id="score" name="score" class="form-control @error('score') is-invalid @enderror" placeholder="Masukan Nomer Pemain" value="{{ old('score')}}">
                                @error('score')
                                <div class="invalid-feedback">{{ $message}}</div>
                                @enderror
                              </div>
                            </div>

                            <div class="col-lg-6">
                              <div class="form-group">
                                <label class="form-control-label " for="status">Status</label>
                                <input type="text" id="status" name="status" class="form-control @error('status') is-invalid @enderror" placeholder="Masukan Nomer Pemain" value="{{ old('status')}}">
                                @error('status')
                                <div class="invalid-feedback">{{ $message}}</div>
                                @enderror
                              </div>
                            </div>


                        </div>


                        <div class="row">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label class="form-control-label " for="logo">logo</label>
                              <input type="file" id="logo" name="logo" class="form-control " placeholder="Jumlah logo" value="{{ old('logo')}}">
                              @error('logo')
                              <div class="invalid-feedback">{{ $message}}</div>
                              @enderror
                            </div>
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
