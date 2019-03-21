@extends('principal')

@section('conteudo')

<div class="wrapper">

  <div class="table">

    <div class="row header">
      <div class="cell">
        Cliente
      </div>
      <div class="cell">
        Data
      </div>
      <div class="cell">
        Valor
      </div>
      <div class="cell">
        Comprovante
	  </div>
	  <div class="cell">
        Situação
	  </div>
	  <div class="cell">
        Tipo
      </div>
    <div class="cell">
      Atualizar
    </div>
	  <div class="cell">
        Deletar
      </div>
  </div>
</div>
	
	@foreach($data as $p)
    <div class="row">
		<div class="cell">{{ $p->cliente }}</div>
		<div class="cell">{{ $p->data }}</div>
		<div class="cell">{{ $p->valor }}</div>
		<div class="cell">{{ $p->comprovante }}</div>
		<div class="cell">{{ $p->situacao }}</div>
		<div class="cell">{{ $p->despesas->tipos }}</div>
    <div class="cell">
      <a type="submit" method="get" href="/api/formulario/{{$p->id}}">
        <span class="glyphicon glyphicon-refresh text-success" title="Atualizar registro"></span>
      </a>
    </div>
    <div class="cell">
      <a type="submit" method="delete" href="/api/remove/{{$p->id}}">
        <span class="glyphicon glyphicon-remove text-danger" title="Excluir registro"></span>
      </a>
    </div>
	</div>
  @endforeach
</div>

<!-- GREEN -->
<div class="table">

    <div class="row header green">
      <div class="cell">
        Cliente
      </div>
      <div class="cell">
        Data
      </div>
      <div class="cell">
        Valor
      </div>
      <div class="cell">
        Comprovante
	  </div>
	  <div class="cell">
        Situação
	  </div>
	  <div class="cell">
        Tipo
      </div>
    </div>
	
	@foreach($data as $d)
    <div class="row">
		<div class="cell">{{ $d->cliente }}</div>
		<div class="cell">{{ $d->data }}</div>
		<div class="cell">{{ $d->valor }}</div>
		<div class="cell">{{ $d->comprovante }}</div>
		<div class="cell">{{ $d->situacao }}</div>
		<div class="cell">{{ $d->despesas->tipos }}</div>
	</div>
  @endforeach
</div> 

<!-- BLUE -->
<div class="table">

    <div class="row header blue">
      <div class="cell">
        Cliente
      </div>
      <div class="cell">
        Data
      </div>
      <div class="cell">
        Valor
      </div>
      <div class="cell">
        Comprovante
	  </div>
	  <div class="cell">
        Situação
	  </div>
	  <div class="cell">
        Tipo
      </div>
    </div>
	
	@foreach($data as $p)
    <div class="row">
		<div class="cell">{{ $p->cliente }}</div>
		<div class="cell">{{ $p->data }}</div>
		<div class="cell">{{ $p->valor }}</div>
		<div class="cell">{{ $p->comprovante }}</div>
		<div class="cell">{{ $p->situacao }}</div>
		<div class="cell">{{ $p->despesas->tipos }}</div>
	</div>
  @endforeach
</div>

</div>

@stop