@extends('adminlte::page')

@section('title', 'saldo')

@section('content_header')
    <h1>Cadastro de Despesas</h1>

    <ul class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">Despesa</a></li>
    </ul>
@stop

@section('content')
<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" action="{{ route('formulario.addDespesa') }}" method="POST">
                        {!! csrf_field() !!}
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Despesa</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon">
                                 <i class="glyphicon glyphicon-th-large"></i></span>
                                 <input id="tipos" name="tipos" placeholder="Nome da despesa" 
                                 class="form-control" required="true" value="" type="text">
                                </div>
                            </div>
                          </div>
                            
                            <div class="form-group">
                              <label class="col-md-4 control-label">Descrição da Despesa</label>
                              <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon">
                                  <i class="glyphicon glyphicon-th-list"></i></span>
                                  <textarea id="descricao" name="descricao" placeholder="descricao" 
                                  class="form-control" required="true" value="" type="date"></textarea>
                                </div>
                              </div>
                            </div>

                      </fieldset>
                      <button type="submit" class="btn btn-primary">Adicionar +</button>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div>
@stop