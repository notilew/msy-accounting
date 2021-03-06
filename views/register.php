
<?php require_once '../app/modules/contacts/contacts-module.php'; ?>
<?php add(); ?>

<?php include HEADER_TEMPLATE; ?>

<h2>Novo Contato</h2>

<form action="register.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-3">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="contact['name']">
    </div>

    <div class="form-group col-md-4">
      <label for="name">Razão Social</label>
      <input type="text" class="form-control" name="contact['company_name']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CNPJ / CPF</label>
      <input type="text" class="form-control" name="contact['cpf_cnpj']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Nascimento</label>
      <input type="text" class="form-control" name="contact['birthdate']">
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-5">
      <label for="campo1">Endereço</label>
      <input type="text" class="form-control" name="contact['address']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Bairro</label>
      <input type="text" class="form-control" name="contact['hood']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">CEP</label>
      <input type="text" class="form-control" name="contact['zip_code']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="contact['created']" disabled>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-2">
      <label for="campo3">Inscrição Estadual</label>
      <input type="text" class="form-control" name="contact['ie']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo1">Cidade</label>
      <input type="text" class="form-control" name="contact['city']">
    </div>

    <div class="form-group col-md-1">
      <label for="campo3">UF</label>
      <input type="text" class="form-control" name="contact['state']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="contact['phone']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Celular</label>
      <input type="text" class="form-control" name="contact['mobile']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo3">Email</label>
      <input type="text" class="form-control" name="contact['email']">
    </div>
  </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="contacts.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include FOOTER_TEMPLATE; ?>
