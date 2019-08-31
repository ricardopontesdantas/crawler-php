@extends('layout')

@section('cabecalho')
Crawler de Emails
@endsection

@section('conteudo')
<table class="table table-striped table-dark">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Descrição</th>
			<th scope="col">Quantidade</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">1</th>
			<td>URLs coletadas</td>
			<td id='urlsColetadas'></td>
		</tr>
		<tr>
			<th scope="row">2</th>
			<td>URLs visitadas</td>
			<td id='urlsVisitadas'></td>
		</tr>
	</tbody>
</table>

<hr>

<table class="table table-striped text-center">
	<thead class="bg-info">
		<tr>
			<th scope="col">Últimos 10 emails coletados</th>
		</tr>	
	</thead>
	<tbody id='listaEmails'>
	</tbody>
</table>
@endsection