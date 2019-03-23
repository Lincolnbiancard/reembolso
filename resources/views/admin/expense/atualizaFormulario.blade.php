@extends('adminlte::page')

@section('title', 'saldo')

@section('content_header')
    <h1>Pedido de Reembolso de Despesa</h1>

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
                      action="/reembolso/public/admin/update/{{ $formulario->id }}" method="POST">
                   <input type="hidden" name="_token" value="<php? csrf_token() ?>">
                      <input type="hidden" name="_method" value="PUT">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Cliente</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon">
                                 @csrf
                                 <i class="glyphicon glyphicon-user"></i></span>
                                 <input id="cliente" name="cliente" placeholder="Nome Cliente" 
                                 class="form-control" required="true" value="{{$formulario->cliente}}" 
                                 type="text"></div>

                            </div>
                          </div>
                            <div class="form-group">
                              <label class="col-md-4 control-label">Data</label>
                              <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon">
                                  <i class="glyphicon glyphicon-calendar"></i></span>
                                  <input id="data" name="data" placeholder="Data" 
                                  class="form-control" required="true" value="{{$formulario->data}}" 
                                  type="date"></div>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label">Valor</label>
                              <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon">
                                  <i>R$</i></span>
                                  <input id="valor" name="valor" placeholder="R$ Valor" 
                                  class="form-control" required="true" value="{{$formulario->valor}}" 
                                  type="number"></div>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label">Despesa</label>
                              <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon">
                                  <i class="glyphicon glyphicon-list"></i></span>
                                  <select id="despesa" name="despesa_id[]" placeholder="Despesa" 
                                  class="form-control" required="true" multiple="multiple">
                                  @foreach($despesas as $d)
                                    <option value="{{$d->id}}" 
                                        {{(gettype($formulario->despesa_id) == 'array' &&
                                          in_array($d->id, $formulario->despesa_id)) ||
                                            $d->id == $formulario->despesa_id ? 'selected' : ''}}>{{$d->tipos}}
                                    </option>
                                  @endforeach                                  
                                </select>
                              </div>
                            </div>
                      </fieldset>
                      <button type="submit" class="btn btn-primary">Atualizar</button>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
  $("#despesa").select2()
</script>
@stop