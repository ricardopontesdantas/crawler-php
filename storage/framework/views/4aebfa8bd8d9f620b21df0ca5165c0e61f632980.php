<?php $__env->startSection('cabecalho'); ?>
Crawler de Emails
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/audima/resources/views/index.blade.php ENDPATH**/ ?>