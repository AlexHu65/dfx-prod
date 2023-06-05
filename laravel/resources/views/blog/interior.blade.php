@extends('master')
@section('title',  (isset($titulo) ? $titulo  : 'Blog'))
@section('content')

<!-- banner -->
@include('home.secciones.banner')
<!-- header -->
@include('blog.secciones.header')
<!--blog-->
@include('blog.secciones.contenido')
<!-- interior -->
@include('blog.secciones.cta')



@endsection
