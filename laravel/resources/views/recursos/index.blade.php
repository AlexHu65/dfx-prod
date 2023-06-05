@extends('master')
@section('title',  (isset($titulo) ? $titulo  : 'Recursos'))
@section('content')

<!-- banner -->
@include('home.secciones.banner')
<!-- header -->
@include('recursos.secciones.header')
<!--recurso contenido-->
@include('recursos.secciones.contenido')

@endsection
