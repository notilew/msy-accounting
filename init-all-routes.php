<?php

/**
 * script de inicialização de rotas e configurações no servidor
 * @author - wellington félix
 * @link   - wellington_bhmg@hotmail.com
 */

# importando script php que define as constantes com as rotas principais da aplicação
require_once 'routes/main-paths.php';

# habilitando todas as exibições de erros
ini_set('display_errors', true);

error_reporting(E_ALL);
