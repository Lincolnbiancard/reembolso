@extends('principal')

@section('conteudo')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->

<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" action="/api/formulario/{{ $formulario->id }}" method="POST">
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
                              <label class="col-md-4 control-label">Comprovante</label>
                              <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon">
                                  <i class="glyphicon glyphicon-cloud-upload"></i></span>
                                  <input id="comprovante" name="comprovante" placeholder="Comprovante" 
                                  class="form-control" required="true" value="{{$formulario->comprovante}}" 
                                  type=""></div>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label">Despesa</label>
                              <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon">
                                  <i class="glyphicon glyphicon-list"></i></span>
                                  <select id="despesa" name="despesa" placeholder="Despesa" 
                                  class="form-control" required="true" type="">
                                    
                                  @foreach($despesas as $despesa)
                                  @if($formulario->id == $despesa->id)
                                     <option value="{{ $despesa->id }}}" selected>{{ $despesa->tipos }}</option>
                                       @else
                                     <option value="{{ $despesa->id }}">{{ $despesa->tipos }}</option>
                                     @endif
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
    </div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @stop