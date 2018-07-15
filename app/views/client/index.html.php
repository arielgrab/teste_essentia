<table class="table">
	<thead>
		<tr>
			<td>Imagem</td>
			<td>Nome</td>
			<td>E-mail</td>
			<td>Telefone</td>
			<td>Criado em</td>
			<td>Atualizado em</td>
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
			</tr>
		<?php } ?>
	</tbody>
</table>