<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="/css/padrao.css">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
</head>
<body>

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

</body>
</html>