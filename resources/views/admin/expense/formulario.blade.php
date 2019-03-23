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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" action="{{ route('formulario.store') }}" method="POST">
                      {!! csrf_field() !!}
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Cliente</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon">
                                 <i class="glyphicon glyphicon-user"></i></span>
                                 <input id="cliente" name="cliente" placeholder="Nome Cliente" 
                                 class="form-control" required="true" value="" type="text"></div>
                            </div>
                          </div>
                            
                            <div class="form-group">
                              <label class="col-md-4 control-label">Data</label>
                              <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon">
                                  <i class="glyphicon glyphicon-calendar"></i></span>
                                  <input id="data" name="data" placeholder="Data" 
                                  class="form-control" required="true" value="" type="date"></div>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label">Valor</label>
                              <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon">
                                  <i class="ion ion-cash"></i></span>
                                  <input id="valor" name="valor" placeholder="R$ Valor" 
                                  class="form-control" required="true" value="" type="text"></div>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label">Comprovante</label>
                              <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon">
                                  <i class="glyphicon glyphicon-cloud-upload"></i></span>
                                  <input id="comprovante" name="comprovante" placeholder="Comprovante" 
                                  class="form-control" required="true" value="" type="arch"></div>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label">Despesa</label>
                              <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon">
                                  <i class="glyphicon glyphicon-list"></i></span>
                                  <select id="despesa" name="despesa_id[]" placeholder="Despesa" 
                                    class="form-control" required="true" multiple="multiple">
                                    @foreach($despesa as $d)
                                      <option value="{{$d->id}}">{{$d->tipos}}</option>
                                    @endforeach 
                                  </select>
                                  <input id="user_id" name="user_id" value="{{ auth()->user()->id }}"
                                         type="hidden">
                                </div>
                              </div>
                                  
                              </div>
                            </div>
                            @include('admin.includes.alerts')
                      </fieldset>
                      <button type="submit" class="btn btn-primary">Adicionar +</button>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div>
    </div>

  <script src="{{ asset('js/scripts.js') }}"></script>
@stop

