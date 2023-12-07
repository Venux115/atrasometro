<?php

namespace Atrasometro\controller;

class homeController implements Controller
{
    private $repository;
    public function __construct(array $repository)
    {
        $this->repository = $repository["usuario"];
    }

    public function processaRequisicao()
    {
        $email_usuario = $_SESSION['email_user'];
        $usuarios = $this->repository->buscar($email_usuario);
        
        $nivel = $usuarios[0]->getNivel();
        

        if (!isset($_SESSION['logado']) && (!isset($_SESSION['email_user'])) && (!$usuarios['nivel_usuario'] === 1 )) {
            
            header('Location:/negado');
        } else {
            
            require_once __DIR__ . "/../view/home.php";
        }
    }
}
