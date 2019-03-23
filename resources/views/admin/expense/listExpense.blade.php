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
        
        <div class="box-header">
           
        </div>

        <div class="box-body">
           
            <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Tipos</th>
                            <th>Descrição</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($despesas as $despesa)
                            <tr>
                            <td>{{ $despesa->tipos }}</td>
                            <td>{{ $despesa->descricao }}</td>
                            <td>
                                <a type="submit" method="get" href="show/{{$despesa->id}}" 
                                    class="btn btn-success glyphicon glyphicon-refresh" value="Atualizar"></a>
                                </a>
                            <td>
                                <form action="destroy/{{$despesa->id}}" method="post">
                                    <input class="btn btn-danger glyphicon glyphicon glyphicon-trash" type="submit" value="Excluir" />
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