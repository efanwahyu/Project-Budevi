@extends('layouts.master')

@section('title','News')

@section('container')


    <div class="site-blocks-cover overlay" style="background-image: url('frontend/images/berita.jpeg');" data-aos="fade" data-stellar-background-ratio="0.5">
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
            
                <a href="{{ route('news.isi_berita', $berita->id) }}">
              <img src="{{URL::asset($berita->gambar) }}" alt="Image" class="img-fluid">
            </a>
            </div>
            <div class="text p-4">
              <h2 class="h5 text-black"><a href="{{ route('news.isi_berita', $berita->id) }}">{{ $berita->judul }}</a></h2>
              <span class="text-uppercase date d-block mb-3"></span>
              <p class="mb-0 p-new">{!! Str::limit($berita->isi_berita, 80, '  Baca Selengkapnya...') !!}</p>
            </div>
          </div>
        </div>
        @endforeach
        
        </div>
        <h4>{{ $news->links() }}</h4>
          
      

        @endsection









