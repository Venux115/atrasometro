<?php

namespace Atrasometro\controller;

class ErroEmailController implements Controller
{
    public function __construct()
    {
    }
    public function processaRequisicao()
    {
        require_once __DIR__ . "/../view/erro_email.php";
    }
}
