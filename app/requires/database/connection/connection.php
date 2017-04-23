<?php

/**
 * script de funções para acesso ao banco de dados da contabilidade MSY
 * @author - wellington félix
 * @link   - wellington_bhmg@hotmail.com
 */

# configuração para que o SGBD MYSQL retorne erros graves
mysqli_report(MYSQLI_REPORT_STRICT);

/**
 * abre uma conexão com a base de dados da contabilidade MSY e retorna a conexão realizada
 */
function open_database()
{
  try {

    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

      return $connection;

  } catch (Exception $e) {

      echo $e->getMessage();

        return null;

  }

}

/**
 * fecha a conexão que for passada como parâmetro
 * @param - $connection - conexão realizada com a base de dados da contabilidade MSY
 */
function close_database($connection)
{
  try {

    mysqli_close($connection);

  } catch (Exception $e) {

      echo $e->getMessage();

  }

}
