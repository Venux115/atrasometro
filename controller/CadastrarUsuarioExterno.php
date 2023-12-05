<?php

namespace Atrasometro\controller;

class CadastrarUsuarioExterno implements Controller
{
    public function __construct()
    {

    }
    public function processaRequisicao()
    {
        require_once __DIR__ ."/../view/form_cadastro_usuario_externo.php";
    }
}
