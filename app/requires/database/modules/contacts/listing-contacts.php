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

        $stmt->bind_result($id, $created, $name, $company_name, $cpf_cnpj, $birthdate, $address, $hood, $zip_code, $city, $state, $phone, $mobile, $ie, $email, $comment, $modified);

        while ($stmt->fetch()) {

          $found['id']           = $id;
          $found['created']      = $created;
          $found['name']         = $name;
          $found['company_name'] = $company_name;
          $found['cpf_cnpj']     = $cpf_cnpj;
          $found['birthdate']    = $birthdate;
          $found['address']      = $address;
          $found['hood']         = $hood;
          $found['zip_code']     = $zip_code;
          $found['city']         = $city;
          $found['state']        = $state;
          $found['phone']        = $phone;
          $found['mobile']       = $mobile;
          $found['ie']           = $ie;
          $found['email']        = $email;
          $found['comment']      = $comment;
          $found['modified']     = $modified;

        }

      }
    # pesquisando todos os registros
    }else {

      $query = "SELECT * FROM " . $table;

      if ($stmt = $connection->prepare($query)) {

        $stmt->execute();

        $stmt->bind_result($id, $created, $name, $company_name, $cpf_cnpj, $birthdate, $address, $hood, $zip_code, $city, $state, $phone, $mobile, $ie, $email, $comment, $modified);

        $counter = 0;

        while ($stmt->fetch()){

          $found[$counter]['id']           = $id;
          $found[$counter]['created']      = $created;
          $found[$counter]['name']         = $name;
          $found[$counter]['company_name'] = $company_name;
          $found[$counter]['cpf_cnpj']     = $cpf_cnpj;
          $found[$counter]['birthdate']    = $birthdate;
          $found[$counter]['address']      = $address;
          $found[$counter]['hood']         = $hood;
          $found[$counter]['zip_code']     = $zip_code;
          $found[$counter]['city']         = $city;
          $found[$counter]['state']        = $state;
          $found[$counter]['phone']        = $phone;
          $found[$counter]['mobile']       = $mobile;
          $found[$counter]['ie']           = $ie;
          $found[$counter]['email']        = $email;
          $found[$counter]['comment']      = $comment;
          $found[$counter]['modified']     = $modified;

          $counter++;

        }

      }

    }

  } catch(Exception $e){

      $_SESSION['message'] = $e->getMessage();
      $_SESSION['type']    = 'danger';

      close_database($connection);

  }

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

/**
 * insere um registro na tabela contatos
 */
function save($table = null, $data = null)
{
  $connection = open_database();

  $columns = null;
  $values  = null;

  foreach ($data as $key => $value) {
    $columns .= trim($key, "'") . ", ";
    $values  .= "'$value', ";
  }

  $columns = rtrim($columns, ', ');
  $values  = rtrim($values,  ', ');

  $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";

  try {

    $connection->query($sql);

    $_SESSION['message'] = 'Registro Cadastrado com Sucesso!';
    $_SESSION['type']    = 'success';

  } catch(Exception $e) {

    $_SESSION['message'] = 'Não foi possível realizar a operaçao!';
    $_SESSION['type']    = 'danger';

  }

  close_database($connection);

}

/**
 * atualiza um registro na tabela contatos por id
 */
function update($table = null, $id = 0, $data = null)
{
  $connection = open_database();

  $items = null;

  foreach ($data as $key => $value) {

    $items .= trim($key, "'") . "='$value',";

  }

  # removendo a última vírgula
  $items = rtrim($items, ',');

  $sql  = "UPDATE " . $table;
  $sql .= " SET $items";
  $sql .= " WHERE id = " . $id . ";";

  try {

    $connection->query($sql);

    $_SESSION['message'] = 'Registro atualizado com sucesso!';
    $_SESSION['type']    = 'success';

  } catch (Exception $e) {

    $_SESSION['message'] = 'Não foi possível realizar a operação!';
    $_SESSION['type']    = 'danger';

  }

  close_database($connection);

}
