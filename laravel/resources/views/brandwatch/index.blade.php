@extends('master')
@section('title', 'Brandwatch')
@section('content')

<!-- banner -->
@include('home.secciones.banner')
<!-- header -->
@include('brandwatch.secciones.header')
<!-- cta -->
@include('brandwatch.secciones.cta')
<!-- beneficios -->
@include('brandwatch.secciones.beneficios')
<!-- usos -->
@include('brandwatch.secciones.usos')
<!-- partners -->
@include('brandwatch.secciones.partners')
<!-- casos de exito -->
@include('brandwatch.secciones.exito')



@endsection
