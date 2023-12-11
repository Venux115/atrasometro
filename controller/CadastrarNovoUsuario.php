<?php

namespace Atrasometro\controller;
use Atrasometro\entity\Usuarios;

class CadastrarNovoUsuario
{
    private $repository;
    public function __construct(array $repository)
    {
        $this->repository = $repository["usuario"];
    }

    public function processaRequisicao()
    {
        if (validar() && $_SESSION["nivel_acesso"] === 1) 
        {
            $nomeusuario = $_POST['nome'];
            $mail = $_POST['mail'];
            $senha = $_POST['senha'];
            $nivel = $_POST['nivel'];
            $status = 'Ativo';

            $usuario = new Usuarios($nomeusuario, $mail, md5($senha), $status);
            $usuario->setNivel($nivel);

            $add = $this->repository->add($usuario);

            if($add === 0)
            {
                require_once __DIR__ .'/../view/inserir_usuario.php';
            }else{
                echo $add;
            }
        }else
        {
        header("Location:/negado");
        }
    }
}
