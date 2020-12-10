@extends('layouts.masteradmin')
@section('title', 'Category')
@section('label', 'Category')
@section('sub-title', 'Category')

@section('container')


<div class="container-fluid mt--9">
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session('success') }}
        </div>
    @endif

    @if(Session::has('danger'))
        <div class="alert alert-danger" role="alert">
            {{ Session('danger') }}
        </div>
    @endif



@endsection
