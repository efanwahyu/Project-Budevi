@extends('layouts.master')

@section('title','News')

@section('container')

@foreach($news as $readberita)
<div class="site-section">
    <div class="container">

      <div class=" mb-3">
      
        <h3 class="card-title my-3">{{ $readberita->judul }}</h5>
        <img src="{{URL::asset($readberita->gambar) }}" width="400" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">{!! $readberita->isi_berita !!}</p>
          <a href="{{ route('news.index') }}">
          <button class="btn btn-sm btn-primary">Kembali</button>
          </a>
        </div>
      </div>
      @endforeach
      @endsection


