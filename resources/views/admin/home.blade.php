@extends('adminlte::page')

@section('title', 'Sistema Reembolso')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<p>Bem vindo(a) {{ auth()->user()->name }}!</p>
@stop