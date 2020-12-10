@extends('layouts.masteradmin')
@section('title', 'News')
@section('container')

<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">


            <div class="col-lg-7 col-md-10">
                <h1 class="display-2 text-white">News</h1>
                <p class="text-white mt-0 mb-5">on this page you can add, change, and delete data in the table </p>
                <a href="{{ route('dashboardnews.create')}}" class="btn btn-success">Tambah Data</a>
              </div>

          </div>

        </div>

        @if (session('success'))
                    <div class="col-lg-7 col-md-10 ml-3 mt-4 alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('danger'))
                    <div class="col-lg-7 col-md-10 ml-3 mt-4 alert alert-danger">
                         {{ session('danger') }}
                    </div>
                @endif
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
                        <div class="card-header bg-transparent border-0">
                            <h3 class="text-white mb-0">Dark table</h3>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-dark table-flush">
                                <thead class="thead-dark">

                    <tr>
                      {{--  <th scope="col">Project</th>
                      <th scope="col">Budget</th>
                      <th scope="col">Status</th>
                      <th scope="col">Users</th>
                      <th scope="col">Completion</th>
                      <th scope="col">Aksi</th>  --}}

                      <th scope="col" class="text-white text-center">id</th>
                      <th scope="col" class="text-white text-center">Judul</th>
                      <th scope="col" class="text-white text-center">isi_berita</th>
                      <th scope="col" class="text-white text-center">Gambar</th>
                      <th scope="col" class="text-white text-center">Aksi</th>
                    </tr>
                  </thead>
                  @foreach($news as $nw)
                  <tbody>
                    <tr>

                        <th scope="row" class="text-white text-center">{{$loop->iteration}}</th>

                        <td class="text-white text-left">
                            {{-- <span class="badge badge-dot  text-white text-center"> --}}
                            {{$nw->judul}}

                          </td>

                          </div>
                          {{--  End of media gambar  --}}

                          <td class="text-white td-new text-center">

                                    {{$nw->isi_berita}}

                          </td>



                          <td class="text-center text-white">
                            <img src="{{ asset( $nw->gambar ) }}" height="auto" width="200">


                          </td>



                      <td class="text-center">

                        <a href="{{ route('dashboardnews.edit',$nw->id)}}" class="btn btn-sm btn-success"><i class="fas fa-fw fa-edit"></i>Edit</a>
                                <form action="{{ route('dashboardnews.destroy',$nw->id) }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-sm btn-danger"> <i class="fas fa-fw fa-trash"></i>Trash</button>
                                </form>


                      </td>


                      @endforeach
                    </tr>





                  </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

      </div>
    </div>





@endsection
