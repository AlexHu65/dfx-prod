@extends('master')
@section('title', 'Digital Signage')
@section('content')

<!-- banner -->
@include('home.secciones.banner')
<!-- header -->
@include('signage.secciones.header')
<!-- cta -->
@include('signage.secciones.cta')
<!-- servicios -->
@include('signage.secciones.servicios')
<!-- beneficios -->
@include('signage.secciones.beneficios')
<!-- aliado estrategico -->
@include('signage.secciones.aliado')
<!-- partners -->
@include('signage.secciones.partners')
<!-- casos de éxito -->
@include('signage.secciones.exito')

@endsection
