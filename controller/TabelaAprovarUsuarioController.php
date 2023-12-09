<?php

namespace Atrasometro\controller;

class TabelaAprovarUsuarioController implements Controller
{
    private $repository;

    public function __construct(array $repository)
    {
        $this->repository = $repository['usuario'];
    }
    public function processaRequisicao()
    {
        if ((validar()) && ($_SESSION['nivel_acesso'] == 1)) 
        {
            if(isset($_GET['id']) && isset($_GET['nivel']))
            {
                $id = $_GET['id'];
                $nivel = $_GET['nivel'];
                
                $this->repository->aprovar($id, $nivel);

                require_once __DIR__ .'../../view/aprovar_usuario.php';
            }

            if (!isset($_SESSION['email_user'])) 
            {
                header('Location: /');
            }
            $email_usuario = $_SESSION['email_user'];

            $usuarios = $this->repository->buscarInativos();

            require_once __DIR__ .'../../view/tabela_aprovar_usuario.php';
        } else 
        {
            header('Location:negado.php');
        }
    }
}
