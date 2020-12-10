@extends('layouts.master')

@section('title','Match')

@section('container')

@include('layouts.partials.slider')

<div class="site-section site-blocks-vs">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="bg-image overlay-success rounded mb-5" style="background-image: url('frontend/images/hero_bg_1.jpg');" data-stellar-background-ratio="0.5">
      
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">

          <div class="text-center text-lg-left">
            <div class="d-block d-lg-flex align-items-center">
              <div class="image mx-auto mb-3 mb-lg-0 mr-lg-3">
                <img src="{{URL::asset('frontend/images/Liverpool.png')}}" alt="Image" class="img-fluid">
              </div>
              <div class="text">
              @foreach($gamer as $tester)
                <h3 class="h5 mb-0 text-black">Liverpool F.C.</h3>
                <span class="text-uppercase small country text-black">Liverpool</span>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
          <div class="d-inline-block">
            <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">{{ $tester->liga }}</small></p>
            <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h3">{{ $tester->score }}</span></div>
            <p class="mb-0"><small class="text-uppercase text-black font-weight-bold">{{ $tester->date }}</small></p>
          </div>
        </div>

        <div class="col-md-12 col-lg-4 text-center text-lg-right">
          <div class="">
            <div class="d-block d-lg-flex align-items-center">
              <div class="image mx-auto ml-lg-3 mb-3 mb-lg-0 order-2">
                <img src="{{URL::asset($tester->logo) }}" alt="Image" class="img-fluid">
              </div>
              <div class="text order-1">
                <h3 class="h5 mb-0 text-black">{{ $tester->team_musuh }}</h3>
                <span class="text-uppercase small country text-black">{{ $tester->negara }}</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
      </div>
    </div>
    
    <div class="row align-items-center mb-5">
      <div class="col-md-12">


        <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
          <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

            <div class="text-center text-lg-left">
              <div class="d-block d-lg-flex align-items-center">
                <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                  <img src="{{URL::asset('frontend/images/Liverpool.png')}}" alt="Image" class="img-fluid">
                </div>
                <div class="text">
                  <h3 class="h5 mb-0 text-black">Liverpool F.C.</h3>
                  <span class="text-uppercase small country">Liverpool</span>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
            <div class="d-inline-block">
              <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">{{ $tester->score }}</span></div>
            </div>
          </div>

          <div class="col-md-4 col-lg-4 text-center text-lg-right">
            <div class="">
              <div class="d-block d-lg-flex align-items-center">
                <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                  <img src="{{URL::asset($tester->logo) }}" alt="Image" class="img-fluid">
                </div>
                <div class="text order-1 w-100">
                  <h3 class="h5 mb-0 text-black">{{ $tester->team_musuh }}</h3>
                  <span class="text-uppercase small country">{{ $tester->negara }}</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <!-- END row -->



        

      </div>

    </div>
    <div class="row">
      <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
    </div>
  </div>
</div>


@endsection
