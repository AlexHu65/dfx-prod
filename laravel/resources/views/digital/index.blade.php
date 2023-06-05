@extends('master')
@section('title', 'Marketing digital')
@section('content')

<!-- banner -->
@include('home.secciones.banner')
<!-- header -->
@include('digital.secciones.header')
<!-- cta -->
@include('digital.secciones.cta')
<!-- servicios -->
@include('digital.secciones.servicios')
<!-- beneficios -->
@include('digital.secciones.beneficios')
<!-- software -->
@include('digital.secciones.software')
<!-- partners -->
@include('digital.secciones.partners')
<!-- casos de éxito -->
@include('digital.secciones.exito')

@endsection
