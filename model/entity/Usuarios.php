<?php 
namespace Atrasometro\entity;

class Usuarios 
{
    private $id_usuario;
    private $nome_usuario;
    private $mail_usuario;
    private $senha_usuario;
    private $nivel_usuario;
    private $status;

    public function __construct(string $nome, string $email, string $senha, string $nivel_usuario, string $status)
    {
        $this->id_usuario = $nome;
        $this->mail_usuario = $email;
        $this->senha_usuario = $senha;
        $this->nivel_usuario = $nivel_usuario;
        $this->status = $status;
    }

    public function getNome(): string
    {
        return $this->id_usuario;
    }

    public function getSenha(): string
    {
        return $this->senha_usuario;
    }

    public function getEmail(): string
    {
        return $this->mail_usuario;
    }
}