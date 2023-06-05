@extends('master')
@section('title', $noticia->titulo )
@section('content')

<!--banner-->
@include('interior.secciones.banner')
<!-- contenido-->
@include('interior.secciones.contenido')
<!-- resultados-->
@include('home.secciones.datos')
<!-- formulario-->
@include('home.secciones.formulario')

@endsection
