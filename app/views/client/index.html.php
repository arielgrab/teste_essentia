<?php if (!count($clients)){ ?>
	<p>Nenhum cliente cadastrado.</p>
<?php }else{ ?>

<div class="page-header">
  <h3>Clientes <small>lista</small></h3>
</div>

<table class="table">
	<thead>
		<tr>
			<td>Imagem</td>
			<td>Nome</td>
			<td>E-mail</td>
			<td>Telefone</td>
			<td>Criado em</td>
			<td>Atualizado em</td>
			<td></td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($clients as $key => $value) { ?>
			<tr>
				<td><?php echo $value['image']; ?></td>
				<td><a href="/client/show/<?php echo $value['id']; ?>"><?php echo $value['name']; ?></a></td>
				<td><?php echo $value['email']; ?></td>
				<td><?php echo $value['tel']; ?></td>
				<td><?php echo $value['created_at']; ?></td>
				<td><?php echo $value['updated_at']; ?></td>
				<td><a href="/client/edit/<?php echo $value['id'] ?>" class="btn btn-warning"> <i class="glyphicon glyphicon-pencil" aria-hidden="true"></i> </a></td>
			</tr>
		<?php } ?>
	</tbody>
</table>

<?php } ?>