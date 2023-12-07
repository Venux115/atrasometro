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

    public function __construct(string $nome, string $email, string $senha, string $status)
    {
        $this->nome_usuario = $nome;
        $this->mail_usuario = $email;
        $this->senha_usuario = $senha;
        $this->status = $status;
    }

    public function setId($id): void
    {
        $this->id_usuario = $id;
    }
    
    public function setNivel(string $nivel): void
    {
        $this->nivel_usuario = $nivel;
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

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getNivel()
    {
        return $this->nivel_usuario;
    }
}