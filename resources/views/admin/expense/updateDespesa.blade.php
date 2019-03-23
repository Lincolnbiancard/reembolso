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
                   <form class="well form-horizontal" 
                      action="/reembolso/public/admin/update/despesa/{{ $despesa->id }}" method="POST">
                   <input type="hidden" name="_token" value="<php? csrf_token() ?>">
                      <input type="hidden" name="_method" value="PUT">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Despesa</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon">
                                 @csrf
                                 <i class="glyphicon glyphicon-th-large"></i></span>
                                 <input id="tipos" name="tipos" placeholder="Nome Cliente" 
                                 class="form-control" required="true" value="{{ $despesa->tipos }}" 
                                 type="text">
                                </div>
                            </div>
                         </div>
                                 
                         <div class="form-group">
                           <label class="col-md-4 control-label">Despesa</label>
                           <div class="col-md-8 inputGroupContainer">
                              <div class="input-group"><span class="input-group-addon">
                                @csrf
                                <i class="glyphicon glyphicon-th-list"></i></span>
                                <input id="descricao" name="descricao" 
                                class="form-control" required="true" value="{{ $despesa->descricao }}" 
                                type="text">
                               </div>
                           </div>
                        </div>
                      </fieldset>
                      <button type="submit" class="btn btn-primary">Atualizar</button>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @stop