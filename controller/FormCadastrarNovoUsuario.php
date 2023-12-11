<?php

namespace Atrasometro\controller;

class FormCadastrarNovoUsuario implements Controller
{

    private $repository;
    public function __construct(array $repository)
    {
        $this->repository = $repository["usuario"];
    }

    public function processaRequisicao()
    {
        /*if (isset($_SESSION['logado']) && ($_SESSION['logado'] == 1)) {         
            $usuario = $_SESSION['usuario'];
            if(!isset($_SESSION['usuario'])){
                header('Location: index.php');
            }
            $sql = "SELECT `nivel_usuario` FROM `usuarios` WHERE `mail_usuario` = '$usuario' and `status` = 'Ativo'";
            $buscar = mysqli_query($conexao, $sql);
            $array = mysqli_fetch_array($buscar);
            $nivel = $array['nivel_usuario'];

        } else{
            header('Location:negado.php');
        }*/

        $email_usuario = $_SESSION['email_user'];
        $usuarios = $this->repository->buscar($email_usuario);

        if (!(validar()) && !($_SESSION['nivel_acesso'] == 1))  {

            header('Location:/negado');
        } else {
            require_once __DIR__ . "/../view/cadastro_usuario.php";
        }
    }
}
