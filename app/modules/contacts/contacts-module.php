<?php

/**
 * script de funções referentes aos contatos
 * @author - wellington félix
 * @link   - wellington_bhmg@hotmail.com
 */

require_once '../init-all-routes.php';

require CONNECTION_SETTINGS_PATH;
require CONNECTION_PATH;

require ABS_PATH . 'app/requires/database/functions/listing-contacts.php';

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
