<?php

namespace Atrasometro\controller;

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
        

        $sql = "INSERT INTO `usuarios`(`nome_usuario`, `mail_usuario`, `senha_usuario`, `status`) VALUES ('$nomeusuario','$mail',md5('$senha'),'$status')";

        $inserir = mysqli_query($conexao, $sql);

    }
}
