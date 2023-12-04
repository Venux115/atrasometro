<?php

namespace Atrasometro\controller;

class ErroSenhaController implements Controller
{
    public function __construct()
    {

    }
    public function processaRequisicao()
    {
        require_once __DIR__ ."/../view/erro_senha.php";
    }
}
