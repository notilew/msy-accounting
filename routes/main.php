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
