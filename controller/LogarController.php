<?php
namespace Atrasometro\controller;

use Atrasometro\controller\Controller;

class LogarController implements Controller
{
    private $repository;
    public function __construct(array $repository)
    {
        $this->repository = $repository["usuario"];
    }

    public function processaRequisicao()
    {
        $email = $_POST['usuario'];
        $senha = $_POST['senha'];

        $logar = $this->repository->logar($email, $senha);

        var_dump($logar);

        
        switch ($logar) {
            case true:
                header('location:/home');
                break;
            case 0:
                header('location:/erro_senha');
                break;
            case 1:
                header('location:/erro_email');
                break;
            default:
                require_once __DIR__ . "/../view/esperandoAprovacao.php";
        }
    }

}
