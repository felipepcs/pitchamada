<?php

require_once "inc/config.php";
require_once "controller/RealizadasController.php";
require_once "model/Realizadas.php";

$app = new RealizadasController();

if ( isset($_GET['acao']) ){

    if( $_GET['acao']=='create' ){
        $app->create();
    }

}else{
    $app->all();
}