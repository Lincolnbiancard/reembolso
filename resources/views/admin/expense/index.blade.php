@extends('adminlte::page')

@section('title', 'saldo')

@section('content_header')
    <h1>Depesas</h1>

    <ul class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Despesa</a></li>
    </ul>
@stop

@section('content')
    <div class="box">
        {{-- BTN Form register --}}
        <a href="{{ route('admin.formulario') }}" class="btn btn-primary glyphicon glyphicon-plus" 
            alt="Novo Pedido de Despesa"></a>
        {{-- BTN Form Update --}}
        <a href="{{ route('admin.formulario') }}" class="btn btn-success glyphicon glyphicon-refresh" 
            alt="Atualiza Pedido de Depesa"></a>
        {{-- BTN list pedidos --}}
        <a href="{{ route('admin.listagem') }}" class="glyphicon glyphicon-list-alt btn btn-danger"></a>

        <div class="box-header">
            @include('admin.includes.alerts')
        </div>

        <div class="box-body">
            <div class="small-box bg-green">
                    <div class="inner">
                        <h3>{{ $userLogado }}</sup></h3>
        
                        <p>Despesas Cadastradas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                    <a href="#" class="small-box-footer">Histórico <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
@stop