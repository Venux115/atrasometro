<?php
namespace Atrasometro\controller;

use Atrasometro\controller\Controller;

class DeslogarController implements Controller {
    public function __construct()
    {

    }
    public function processaRequisicao()
    {
        @session_start();
        session_destroy();
        header('Location:/');
    }
}