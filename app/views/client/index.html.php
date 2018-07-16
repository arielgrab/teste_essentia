<?php if (!count($clients)){ ?>
	<p>Nenhum cliente cadastrado.</p>
<?php }else{ ?>

<div class="page-header">
  <h3>Lista <small>clientes</small></h3>
</div>

<table class="table">
	<thead>
		<tr>
			<td></td>
			<td>Nome</td>
			<td>E-mail</td>
			<td>Telefone</td>
			<td>Criado em</td>
			<td>Atualizado em</td>
			<td></td>
			<td></td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($clients as $key => $value) { ?>
			<tr>
				<td><?php echo \App\Helper::img($value['image'], 'img-rounded thumb'); ?></td>
				<td><a href="/client/show/<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></td>
				<td><?php echo $value['email']; ?></td>
				<td><?php echo $value['tel']; ?></td>
				<td><?php echo \App\Helper::date_format($value['created_at']); ?></td>
				<td><?php echo \App\Helper::date_format($value['updated_at']); ?></td>
				<td><a href="/client/edit/<?php echo $value['id'] ?>" class="btn btn-warning"> <i class="glyphicon glyphicon-pencil" aria-hidden="true"></i> </a></td>
				<td><?php echo \App\Helper::delete('client', $value['id']); ?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>

<?php } ?>