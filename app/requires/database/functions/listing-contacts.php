<?php

/**
 * script de funções do módulo contatos
 * @author - wellington félix
 * @link   - wellington_bhmg@hotmail.com
 */

/**
 * pesquisa um registro pelo id da tabela contatos
 * @param - $table - tabela de contatos
 * @param - $id    - id de um contato
 */
function find($table = null, $id = null)
{
  $connection = open_database();
  $found = array();

  try {
    # pesquisando o registro por id
    if ($id) {

      $query = "SELECT * FROM " . $table . " WHERE id = " . $id;

      if ($stmt = $connection->prepare($query)) {

        $stmt->execute();

        $stmt->bind_result($id, $name, $email, $comment);

        $counter = 0;

        while ($stmt->fetch()) {

          $found[$counter]['id']      = $id;
          $found[$counter]['name']    = $name;
          $found[$counter]['email']   = $email;
          $found[$counter]['comment'] = $comment;

          $counter++;

        }

      }
    # pesquisando todos os registros
    }else {

      $query = "SELECT * FROM " . $table;

      if ($stmt = $connection->prepare($query)) {

        $stmt->execute();

        $stmt->bind_result($id, $name, $email, $comment);

        $counter = 0;

        while ($stmt->fetch()){

          $found[$counter]['id']      = $id;
          $found[$counter]['name']    = $name;
          $found[$counter]['email']   = $email;
          $found[$counter]['comment'] = $comment;

          $counter++;

        }

      }

    }

  } catch(Exception $e){

      $_SESSION['message'] = $e->getMessage();
      $_SESSION['type']    = 'danger';

  }

  close_database($connection);

  return $found;
}

/**
 * pesquisa todos os registros da tabela contatos
 * @param - $table - tabela de contatos
 */
function find_all($table)
{
  return find($table);
}
