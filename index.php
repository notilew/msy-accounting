<?php require 'init-all-routes.php' ?>
<?php require CONNECTION_SETTINGS_PATH ?>
<?php require CONNECTION_PATH ?>

<?php
  $db = open_database();

  if ($db) {

    echo '<h1>Conectado ao Banco de Dados!</h1>';

  } else {

    echo '<h1>ERRO: Não foi possível conectar!</h1>';

  }
?>
