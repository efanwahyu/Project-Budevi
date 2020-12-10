@extends('layouts.master')

@section('title', 'Team')


@section('container')

<!-- Carousel Slider -->
<div class="site-blocks-cover overlay" style="background-image: url(images/img_team.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class="col-md-12 text-center text-md-center" data-aos="fade-down" data-aos-delay="300">
                <h1 class="bg-text-secondary">Squad Liverpool <br>2019/2020</h1>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h1 class="text-black">Liverpool Players</h1>    
            </div>
                <div class="col-md-12">
                    <h1 class="text-black">FORWARD</h1>
                    <hr color="red">
                </div>
        </div>
                

        <!-- Modal -->
        <div class="row">
        
            @foreach( $player as $pl)
            <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
                <div class="player mb-5">
                    <span class="team-number">{{ $pl->nomer_pemain}}</span>
                    <a href="/player/{{ $pl->id }}"  data-toggle="modal" data-target="#exampleModalCenter{{ $pl->id }}">
                        <img src="{{ asset($pl->gambar) }}" alt="Image" class="img-fluid image rounded-circle">

                    </a>
                    <h2>{{ $pl->nama_pemain}}</h2>
                    <span class="position">{{ $pl->position }}</span>
                </div>
            </div>

            <div class="modal fade" id="exampleModalCenter{{ $pl->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                    <h5 class="modal-title text-black" id="exampleModalLongTitle">{{ $pl->nama_pemain }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="card mb-3">
                            <div class=" row no-gutters">
                                <div class="col-md-6 mt-5">
                                <img src="{{ asset($pl->gambar) }}" width="900"  class="card-img" alt=""></a>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h4 class="card-title text-black">Premier League Static</h4>
                                    <h5 class="card-title">{{ $pl->nama_pemain}}</h5>
                                        <hr>
                                        <h5 class="card-title">Penampilan : {{ $pl->penampilan}}  </h5>
                                        <h5 class="card-title">Goal       : {{ $pl->goal}} </h5>
                                        <h5 class="card-title">Shot       : {{ $pl->shot}} </h5>
                                        <h5 class="card-title">Shot On Target : {{ $pl->shot_ontarget}} </h5>
                                        <h5 class="card-title">Assist         : {{ $pl->assist}} </h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>
            @endforeach

           
            <div class="col-md-12">
                <h1 class="text-black">GOAL KEEPER</h1>
                <hr color="red">
            </div>
            @foreach( $kiper as $gk)
            <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
                <div class="player mb-5">
                    <span class="team-number">{{ $gk->nomer_pemain}}</span>
                    <a href="/player/{{ $gk->id }}"  data-toggle="modal" data-target="#exampleModalCenter{{ $gk->id }}">
                        <img src="{{ asset($gk->gambar) }}" alt="Image" class="img-fluid image rounded-circle">

                    </a>
                    <h2>{{ $gk->nama_pemain}}</h2>
                    <span class="position">{{ $gk->position }}</span>
                </div>
            </div>

            <div class="modal fade" id="exampleModalCenter{{ $gk->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                    <h5 class="modal-title text-black" id="exampleModalLongTitle">{{ $gk->nama_pemain }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="card mb-3">
                            <div class=" row no-gutters">
                                <div class="col-md-6 mt-5">
                                <img src="{{ asset($gk->gambar) }}" width="900"  class="card-img" alt=""></a>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h4 class="card-title text-black">Premier League Static</h4>
                                    <h5 class="card-title">{{ $gk->nama_pemain}}</h5>
                                        <hr>
                                        <h5 class="card-title">Penampilan : {{ $gk->penampilan}}  </h5>
                                        <h5 class="card-title">Saves       : {{ $gk->saves}} </h5>
                                        <h5 class="card-title">Catches       : {{ $gk->catches}} </h5>
                                        <h5 class="card-title">Goal Conceded : {{ $gk->goal_conceded}} </h5>
                                        <h5 class="card-title">Clearances         : {{ $gk->clearances}} </h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>
            @endforeach

            <div class="col-md-12">
                <h1 class="text-black">DEFENDERS</h1>
                <hr color="red">
            </div>
            @foreach( $defender as $df)
            <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
                <div class="player mb-5">
                    <span class="team-number">{{ $df->nomer_pemain}}</span>
                    <a href="/player/{{ $df->id }}"  data-toggle="modal" data-target="#exampleModalCenter{{ $df->id }}">
                        <img src="{{ asset($df->gambar) }}" alt="Image" class="img-fluid image rounded-circle">

                    </a>
                    <h2>{{ $df->nama_pemain}}</h2>
                    <span class="position">{{ $df->position }}</span>
                </div>
            </div>

            <div class="modal fade" id="exampleModalCenter{{ $df->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                    <h5 class="modal-title text-black" id="exampleModalLongTitle">{{ $df->nama_pemain }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="card mb-3">
                            <div class=" row no-gutters">
                                <div class="col-md-6 mt-5">
                                <img src="{{ asset($df->gambar) }}" width="900"  class="card-img" alt=""></a>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h4 class="card-title text-black">Premier League Static</h4>
                                    <h5 class="card-title">{{ $df->nama_pemain}}</h5>
                                        <hr>
                                        <h5 class="card-title">Penampilan : {{ $df->penampilan}}  </h5>
                                        <h5 class="card-title">Goal       : {{ $df->goal}} </h5>
                                        <h5 class="card-title">Tackles       : {{ $df->tackles}} </h5>
                                        <h5 class="card-title">Interceptions : {{ $df->interceptions}} </h5>
                                        <h5 class="card-title">Assist         : {{ $df->assist}} </h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>
            @endforeach
            

            <div class="col-md-12">
                <h1 class="text-black">MIDFILDERS</h1>
                <hr color="red">
            </div>
            @foreach( $midfilder as $mf)
            <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
                <div class="player mb-5">
                    <span class="team-number">{{ $mf->nomer_pemain}}</span>
                    <a href="/player/{{ $mf->id }}"  data-toggle="modal" data-target="#exampleModalCenter{{ $mf->id }}">
                        <img src="{{ asset($mf->gambar) }}" alt="Image" class="img-fluid image rounded-circle">

                    </a>
                    <h2>{{ $mf->nama_pemain}}</h2>
                    <span class="position">{{ $mf->position }}</span>
                </div>
            </div>

            <div class="modal fade" id="exampleModalCenter{{ $mf->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                    <h5 class="modal-title text-black" id="exampleModalLongTitle">{{ $mf->nama_pemain }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="card mb-3">
                            <div class=" row no-gutters">
                                <div class="col-md-6 mt-5">
                                <img src="{{ asset($mf->gambar) }}" width="900"  class="card-img" alt=""></a>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h4 class="card-title text-black">Premier League Static</h4>
                                    <h5 class="card-title">{{ $mf->nama_pemain}}</h5>
                                        <hr>
                                        <h5 class="card-title">Penampilan : {{ $mf->penampilan}}  </h5>
                                        <h5 class="card-title">Goal       : {{ $mf->goal}} </h5>
                                        <h5 class="card-title">Passing      : {{ $mf->passing}} </h5>
                                        <h5 class="card-title">Crossing : {{ $mf->crossing}} </h5>
                                        <h5 class="card-title">Assist         : {{ $mf->assist}} </h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>
            @endforeach























{{-- ini adalah tutup div colom --}}

        {{-- </div>
    </div>
</div> --}}

<!-- Content of Team -->




        </div>
    </div>
</div>

<!-- Content of Team -->


@endsection
