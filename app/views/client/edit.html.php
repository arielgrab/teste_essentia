<div class="page-header">
  <h3>
  	Editar <small>cliente</small>
  	<div class="pull-right"><?php echo \App\Helper::delete('client', $client['id']); ?></div>
  </h3>
</div>
<form action="/client/update/<?php echo $client['id'] ?>" name='frm_client_edit' method="post" enctype="multipart/form-data">
    
    <?php require_once '_form.html.php'; ?>

	<input type="submit" name="btn_client_edit" class="btn btn-primary">
</form>