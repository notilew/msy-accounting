<?php require_once '../app/modules/contacts/contacts-module.php'; ?>
<?php edit(); ?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $contact['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome / Razão Social</label>
      <input type="text" class="form-control" name="contact['name']" value="<?php echo $contact['name']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CNPJ / CPF</label>
      <input type="text" class="form-control" name="contact['cpf_cnpj']" value="<?php echo $contact['cpf_cnpj']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Nascimento</label>
      <input type="text" class="form-control" name="contact['birthdate']" value="<?php echo $contact['birthdate']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Endereço</label>
      <input type="text" class="form-control" name="contact['address']" value="<?php echo $contact['address']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Bairro</label>
      <input type="text" class="form-control" name="contact['hood']" value="<?php echo $contact['hood']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">CEP</label>
      <input type="text" class="form-control" name="contact['zip_code']" value="<?php echo $contact['zip_code']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="contact['created']" disabled value="<?php echo $contact['created']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Município</label>
      <input type="text" class="form-control" name="contact['city']" value="<?php echo $contact['city']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="contact['phone']" value="<?php echo $contact['phone']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Celular</label>
      <input type="text" class="form-control" name="contact['mobile']" value="<?php echo $contact['mobile']; ?>">
    </div>

    <div class="form-group col-md-1">
      <label for="campo3">UF</label>
      <input type="text" class="form-control" name="contact['state']" value="<?php echo $contact['state']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Inscrição Estadual</label>
      <input type="text" class="form-control" name="contact['ie']" value="<?php echo $contact['ie']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">UF</label>
      <input type="text" class="form-control">
    </div>
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>
