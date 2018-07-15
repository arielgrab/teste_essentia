<form action="/client/create" name='frm_client_new' method="post">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nome" required="required">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
    </div>
    <div class="form-group">
        <label for="tel">Telefone</label>
        <input type="text" class="form-control" id="tel" name="tel" placeholder="(00) 00000-0000">
    </div>

	<input type="submit" name="btn_client_new" class="btn btn-primary">
</form>