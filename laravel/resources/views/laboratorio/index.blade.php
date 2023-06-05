@extends('master')
@section('title', 'Laboratorio Creativo')
@section('content')

<!-- banner -->
@include('home.secciones.banner')
<!-- header -->
@include('laboratorio.secciones.header')
<!-- cta -->
@include('laboratorio.secciones.cta')
<!-- servicios -->
@include('laboratorio.secciones.servicios')
<!-- beneficios -->
@include('laboratorio.secciones.beneficios')
<!-- software -->
@include('laboratorio.secciones.software')
<!-- exito -->
@include('laboratorio.secciones.exitos')
<!-- partners -->
@include('laboratorio.secciones.partners')
<!-- casos de éxito -->
@include('laboratorio.secciones.exito')

@endsection
