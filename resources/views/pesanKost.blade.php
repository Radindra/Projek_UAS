@extends('layouts.main')

@section('container')

<center><h1> Tentang Kami </h1>
  <h3> {{   $Name  }}</h3>
  <p>{{   $Email }}  </p>
  <img src="img/{{ $Image }}" alt="{{ $Name }} " width="300">
  <h3> Jalan Pattimura III D, Jombang, Jawa Timur  </h3></center>
  @endsection