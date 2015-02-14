<?php

require('../model/Recado.php');
require('../model/RecadoDao.php');

// verifica se existe uma ação definida na requisição
$action = ( array_key_exists( 'action', $_REQUEST) ? $_REQUEST['action'] : "" );

// defini qual método foi solicitado na requisição
if ($action == "criar") {
    criar();
} else if ($action == "salvar") {
    salvar();
} else if ($action == "curtir") {
    curtir();
} else {
    listar();
}

function criar() {
    require_once '../view/form.php';
}

function curtir() {
    // TODO CURTIR
}

function listar() {
    $recadoDao = new RecadoDao();
    $listaRecados = $recadoDao->findAll();
    require_once '../view/list.php';
}

function salvar() {
    $recado = getParameters();
    $recadoDao = new RecadoDao();
    $recadoDao->save($recado);
    listar();
}

function getParameters() {
    $titulo = $_REQUEST['titulo'];
    $texto = $_REQUEST['texto'];
    $autor = $_REQUEST['autor'];
    return new Recado($titulo, $texto, $autor);
}

?>
