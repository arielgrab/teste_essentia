<div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Nome" required="required" value='<?php echo $client['name'] ?>'>
</div>
<div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" value='<?php echo $client['email'] ?>'>
</div>
<div class="form-group">
    <label for="tel">Telefone</label>
    <input type="text" class="form-control" id="tel" name="tel" placeholder="(00) 00000-0000" value='<?php echo $client['tel'] ?>'>
</div>