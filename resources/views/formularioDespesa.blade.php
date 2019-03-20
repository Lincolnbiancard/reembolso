@extends('principal')

@section('conteudo')
<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" action="store" method="post">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Despesa</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon">
                                 <i class="glyphicon glyphicon-user"></i></span>
                                 <input id="tipos" name="tipos" placeholder="Nome da despesa" 
                                 class="form-control" required="true" value="" type="text">
                                </div>
                            </div>
                          </div>
                            
                            <div class="form-group">
                              <label class="col-md-4 control-label">Descrição da Despesa</label>
                              <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon">
                                  <i class="glyphicon glyphicon-calendar"></i></span>
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