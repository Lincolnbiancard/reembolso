<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
       <table class="table table-striped">
          <tbody>
             <tr>
                <td colspan="1">
                   <form class="well form-horizontal" action="/api/adiciona" method="post">
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
                                  <i>R$</i></span>
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
                                  <select id="despesa" name="despesa" placeholder="Despesa" 
                                  class="form-control" required="true" type="arch">
                                    @foreach($despesa as $d)
                                      <option value="{{$d->id}}">{{$d->tipos}}</option>
                                    @endforeach
                                  </select>
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