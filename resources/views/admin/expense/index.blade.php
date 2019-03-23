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
        <a href="{{ route('admin.formulario') }}" class="btn btn-primary"
            alt="Novo Pedido de Despesa">Novo Pedido +</a>
        {{-- BTN Form Update --}}
        <a href="{{ route('admin.formularioDespesa') }}" class="btn btn-success" 
            alt="Nova Depesa">Nova Depesa +</a>
        {{-- BTN list pedidos --}}
        <a href="{{ route('admin.listExpense') }}" class="glyphicon glyphicon-list-alt btn btn-danger"></a>

        <div class="box-header">
            @include('admin.includes.alerts')
        </div>

        <div class="box-body">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><sup style="font-size: 20px">{{ $pedidos }}</sup></h3>
        
                        <p>Pedidos Pendentes</p>
                    
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>
                <a href="{{ route('admin.order') }}" class="small-box-footer">Histórico <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
@stop