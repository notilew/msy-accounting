<?php

/**
 * script de funções referentes aos contatos
 * @author - wellington félix
 * @link   - wellington_bhmg@hotmail.com
 */

require_once '../init-all-routes.php';

require CONNECTION_SETTINGS_PATH;
require CONNECTION_PATH;

require ABS_PATH . 'app/requires/database/modules/contacts/listing-contacts.php';

$contacts = null;
$contact  = null;

/**
 * listagem de contatos
 */
function index()
{
  global $contacts;

  $contacts = find_all('contacts');
}

/**
 * cadastro de contatos
 */
function add()
{
  if (! empty($_POST['contact'])) {

    $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));

    $contact = $_POST['contact'];
    $contact['modified'] = $contact['created'] = $today->format('Y-m-d H:i:s');

    save('contacts', $contact);

    header('location: ' . BASE_URL . 'views/contacts.php');
  }
}

/**
 * atualização/edição de contato
 */
function edit()
{
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (isset($_POST['contact'])) {

      $contact = $_POST['contact'];
      $contact['modified'] = $now->format('Y-m-d H:i:s');

      update('contacts', $id, $contact);

      header('location: ' . BASE_URL . 'index.php');

    } else {

      global $contact;
      $contact = find('contacts', $id);

    }

  } else {

      header('location: ' . BASE_URL . 'index.php');
  }

}
