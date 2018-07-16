<div class="page-header">
  <h3>Editar <small>cliente</small></h3>
</div>
<form action="/client/update/<?php echo $client['id'] ?>" name='frm_client_edit' method="post">
    
    <?php require_once '_form.html.php'; ?>

	<input type="submit" name="btn_client_edit" class="btn btn-primary">
</form>