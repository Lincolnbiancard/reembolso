@extends('adminlte::page')

@section('title', 'saldo')

@section('content_header')
    <h1>Acompanhamento de Pedidos de Reembolso Abertos</h1>

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
                            <th>Comprovante</th>
                            <th>Situação</th>
                            <th>Tipo Reembolso</th>
                            <th>Atualizar</th>
                            <th>Excluir</th>
                            <th>Aprovar</th>
                            <th>Reprovar</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($data as $p)
                            <tr>
                            <td>{{ $p->cliente }}</td>
                            <td>{{ $p->data }}</td>
                            <td>{{ $p->valor }}</td>
                            <td>{{ $p->comprovante }}</td>
                            <td>{{ $p->situacao }}</td>
                            <td>{{ $p->despesas['tipos'] }}</td>
                            <td>
                                <a type="submit" method="get" href="show/{{$p->id}}" 
                                    class="btn btn-success glyphicon glyphicon-refresh" value="Atualizar"></a>
                                </a>
                            <td>
                                <form action="destroy/{{$p->id}}" method="post">
                                    <input class="btn btn-danger glyphicon glyphicon glyphicon-trash" type="submit" value="Excluir" />
                                    <input type="hidden" name="_method" value="delete" />
                                    {!! csrf_field() !!}
                                </form>
                            </td>
                            <td>
                                <form action="approve/{{$p->id}}" method="get">
                                    <input class="btn btn-success glyphicon glyphicon-ok" type="submit" value="Aprovar" />
                                    <input type="hidden" name="_method" value="put" />
                                    {!! csrf_field() !!}
                                </form>
                            </td>
                            <td>
                                <form action="disapprove/{{$p->id}}" method="get">
                                    <input class="btn btn-danger glyphicon glyphicon-remove"  type="submit" value="Reprovar"/> 
                                    <input type="hidden" name="_method" value="put" />
                                    {!! csrf_field() !!}
                                </form>
                            </td>
                                
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
@stop