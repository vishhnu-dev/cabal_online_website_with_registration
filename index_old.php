<?php
    define('__ROOT__', dirname(dirname(__FILE__)));
    
    require 'app/Controllers/routes.php';

    # rotas permitidas
    $arcandius_controller_beta_page = 'routes';
    $action_permited1 = 'pagina_inicial';
    $action_permited2 = 'sing_up_request';

    # ex: domain/?controller_name=contato&action=enviar_contato
    if (isset($_GET['controller'])) {
        $controller_name = $_GET['controller'];
    } else {
        $controller_name = 'routes';
    }

    if (isset($_GET['action'])) {
        $action_name = $_GET['action'];
    } else {
        $action_name = 'pagina_inicial';
    }

    
    if ( (isset($controller_name)) and (isset($action_name)) and ((($controller_name === $arcandius_controller_beta_page and $action_name === $action_permited1)) or (($controller_name === $arcandius_controller_beta_page and $action_name === $action_permited2))) ) {
        
        $controller = new $controller_name;
        $controller->$action_name();
    } else {
        $Error = new Routes;
        $Error->error_404();
    }
?>
