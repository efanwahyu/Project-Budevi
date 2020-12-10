@extends('layouts.master')

@section('title','Match')

@section('container')


    <div class="site-blocks-cover overlay" style="background-image: url(uploads/img_news.jpg)" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class="col-md-12 text-center text-md-center" data-aos="fade-up" data-aos-delay="400">
                <h1 class="bg-transparent">Kabar Berita </h1>
            </div>
        </div>
    </div>
</div>






<div class="site-section">
    <div class="container">
        <div class="row mb-5">
        @foreach($news as $berita)

          <div class="col-md-6 col-lg-4 mb-5">
          <div class="post-entry">
        
            <div class="image">
            
                <a href="http://bola.patunganbersama.com/readberita/15">
              <img src="{{URL::asset($berita->gambar) }}" alt="Image" class="img-fluid">
            </a>
            </div>
            <div class="text p-4">
              <h2 class="h5 text-black"><a href="http://bola.patunganbersama.com/readberita/15">{{ $berita->judul }}</a></h2>
              <span class="text-uppercase date d-block mb-3"></span>
              <p class="mb-0 p-new">Victor Lindelof mengalami cedera melawan Bournemouth tetapi manajer Manchester United Ole Gunnar Solskjaer telah menghil
            , Baca Selengkapnya...</p>
            </div>
          </div>
        </div>
        @endforeach
        </div>

        @endsection









