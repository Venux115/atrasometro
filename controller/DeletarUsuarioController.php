<?php

namespace Atrasometro\controller;

class DeletarUsuarioController implements Controller
{
    private $repository;

    public function __construct(array $repository)
    {
        $this->repository = $repository['usuario'];
    }

    public function processaRequisicao()
    {
        $id = $_GET['id'];

        $this->repository->excluir($id);

        header("Location: /aprovar_usuario");
    }
}
