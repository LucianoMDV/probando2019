<?php
require_once "views/inicioView.php";

// si no indica "action" forzamos asi entra al default
if (!isset($_GET['action']))
    $_GET['action'] = '';

// parsea (separa) la url (si viene "sumar/5/8" => [sumar, 5, 8])
$action = $_GET['action'];
$partesURL = explode("/", $action);

// var_dump($_POST);
// var_dump($_POST["lista_tabla_nombre"]);
// var_dump($_POST["lista_tabla_cantidad"]);
// var_dump($_POST["lista_tabla_precio"]);
// var_dump($_POST["buscar"]);

// decide que acción tomar en base a la url
switch ($partesURL[0]) {
    case 'home':
        $view = new inicioView();
        $view->mostrarInicio();
    break;
}