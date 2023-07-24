<?php

require "model/userModel.php";

class Controller
{
    public function Painel()
    {
        $model = new Model();
        $dados = $model->ListarDados();
        include "view/Painel.php";
    }

    public function Login()
    {
        include "view/Login.php";
    }

    public function NotFound()
    {
        include "view/NotFound.php";
    }

    public function Index()
    {
        include "view/Index.php"; 
    }
}

?>