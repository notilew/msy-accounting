<?php require 'init-all-routes.php' ?>

<?php require CONNECTION_SETTINGS_PATH; ?>
<?php require CONNECTION_PATH; ?>

<?php include HEADER_TEMPLATE; ?>

<?php $db = open_database(); ?>

<h1>Dashboard</h1>
<hr>

<?php if ($db) : ?>

  <div class="row">

    <div class="col-xs-6 col-sm-3 col-md-2">
      <a href="#" class="btn btn-primary">
        <div class="row">
          <div class="col-xs-12 text-center">
            <i class="fa fa-plus fa-5x"></i>
          </div>
          <div class="col-xs-12 text-center">
            <p>Novo Contato</p>
          </div>
        </div>
      </a>
    </div>

    <div class="col-xs-6 col-sm-3 col-md-2">
      <a href="#" class="btn btn-default">
        <div class="row">
          <div class="col-xs-12 text-center">
            <i class="fa fa-user fa-5x"></i>
          </div>
          <div class="col-xs-12 text-center">
            <p>Contatos</p>
          </div>
        </div>
      </a>
    </div>

  </div>

<?php else : ?>

  <div class="alert alert-danger" role="alert">
    <p><strong>ERRO: </strong>Não foi possível conectar ao banco de dados!</p>
  </div>

<?php endif; ?>

<?php include FOOTER_TEMPLATE; ?>
