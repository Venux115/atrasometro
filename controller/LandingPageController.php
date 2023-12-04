<?php 

namespace Atrasometro\controller;

use Atrasometro\controller\Controller;

class LandingPageController implements Controller
{
    public function __construct(){

    }

    public function processaRequisicao()
    {
        require_once __DIR__ ."/../view/landingpage.php";
    }
}