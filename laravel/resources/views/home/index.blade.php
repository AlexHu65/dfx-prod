@extends('master')
@section('title', (isset($titulo) ? '' : ' Difraxion Group'))
@section('content')

<!-- banner -->
@include('home.secciones.banner')
<!-- projectos -->
@include('home.secciones.header')
<!-- servicios -->
@include('home.secciones.servicios')
<!-- casos exito -->
@include('home.secciones.exito')


@endsection
