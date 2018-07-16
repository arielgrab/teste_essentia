		
<div class="row">
    <div class="col-md-12">
      	<div class="panel panel-default">
	        <div class="panel-heading">
	          	<h3>
		          	<?php echo $client['name'] ?>
		          	<a href="/client/edit/<?php echo $client['id'] ?>" class="btn btn-warning pull-right"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a>
	          	</h3>
	        </div>
	        <div class="panel-body">
	        	<div class="row">
	    			<div class="col-md-3">
	          			<?php echo \App\Helper::img($client['image'], 'img-responsive img-rounded'); ?>
	        		</div>
	    			<div class="col-md-9">
			      		<p><strong>E-mail: </strong> <?php echo $client['email'] ?></p>
			  			<p><strong>Telefone: </strong><?php echo $client['tel'] ?></p>
			  			<hr>
			  			<p><strong>Criado em: </strong><?php echo \App\Helper::date_format($client['created_at']) ?></p>
			  			<p><strong>Atualizado em: </strong><?php echo \App\Helper::date_format($client['updated_at']) ?></p>
	    			</div>
	        	</div>
	        </div>
      	</div>
    </div>
</div>