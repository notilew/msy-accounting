<?php

/**
 * script que define as rotas principais da aplicação
 * @author - wellington félix
 * @link   - wellington_bhmg@hotmail.com
 */

# caso não tenha sido definida, defina a constante com o caminho absoluto da pasta da aplicação no servidor
if (! defined('ABS_PATH'))
  define('ABS_PATH', dirname(__FILE__, 2) . '/');

# caso não tenha sido definida, defina a constante com o caminho relativo da pasta da aplicação no servidor
if (! defined('BASE_URL'))
  define('BASE_URL', '/msy-accounting/');

# caso não tenha sido definida, defina a constante com a rota do script php de configurações para conexão com o SGBD MYSQL
if (! defined('CONNECTION_SETTINGS_PATH'))
  define('CONNECTION_SETTINGS_PATH', ABS_PATH . 'config/database/connection-settings.php');

# caso não tenha sido definida, defina a constante com a rota do script php de conexão com a base de dados da contabilidade MSY
if (! defined('CONNECTION_PATH'))
  define('CONNECTION_PATH', ABS_PATH . 'app/requires/database/connection.php');
