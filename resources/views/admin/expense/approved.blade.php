@extends('adminlte::page')

@section('title', 'saldo')

@section('content_header')
    <h1>Acompanhamento de Pedidos de Reembolso Aprovados</h1>

    <ul class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Despesa</a></li>
    </ul>
@stop

@section('content')
    <div class="box">
        
        <div class="box-header">
           
        </div>

        <div class="box-body">
           
            <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Cliente</th>
                            <th>Data</th>
                            <th>Valor</th>
                            <th>Situação</th>
                            <th>Tipo Reembolso</th>
                            <th>Atualizar</th>
                            <th>Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($data as $pedido)
                            <tr>
                            <td>{{ $pedido->cliente }}</td>
                            <td>{{ $pedido->data }}</td>
                            <td>{{ $pedido->valor }}</td>
                            <td>{{ $pedido->situacao }}</td>
                            <td>
                                    @foreach ($despesasNomes[$pedido->id] as $despesa)
                                        {{ $despesa->tipos }}
                                        @if(!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                            </td>
                            <td>
                                <a type="submit" method="get" href="show/{{$pedido->id}}"> 
                                    <input class="btn btn-success" type="submit" value="Atualizar">
                                </a>
                            </td>
                            <td>
                                <form action="formulario/destroy/{{$pedido->id}}" method="post">
                                    <input class="btn btn-danger" type="submit" value="Excluir" />
                                    <input type="hidden" name="_method" value="delete" />
                                    {!! csrf_field() !!}
                                </form>
                            </td>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@stop