<?php
class RealizadasController{


    public function all(){
        $obj = new Realizadas();
        $realizadas = $obj->all();

        include 'view/realizadas_all.php';
    }

    public function create(){
        $obj = new Realizadas();

        if( isset($_POST['nome']) && isset($_POST['telefone']) ){
            $obj->setNome($_POST['nome']);
            $obj->setTelefone($_POST['telefone']);
            $obj->create();
        }

        include 'view/realizadas_create.php';
    }

        
    }
