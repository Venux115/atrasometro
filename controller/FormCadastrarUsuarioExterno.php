<?php

namespace Atrasometro\controller;

use Atrasometro\entity\Usuarios;

class FormCadastrarUsuarioExterno implements Controller
{
    private $repository;

    public function __construct(array $repository)
    {
        $this->repository = $repository["usuario"];
    }

    public function processaRequisicao()
    {
        $nomeusuario = $_POST['nome'];
        $mail = $_POST['mail'];
        $senha = $_POST['senha'];
        $status = 'Inativo';
        
        
        $usuario = new Usuarios($nomeusuario, $mail, $senha, $status);

        $add = $this->repository->add($usuario);
        
        if($add === 0)
        {
            require_once __DIR__ .'/../view/inserir_usuario_externo.php';
        }else{
            echo $add;
        }
    }
}
