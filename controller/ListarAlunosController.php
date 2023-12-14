<?php

namespace Atrasometro\controller;

class ListarAlunosController implements Controller
{
    private $repository;

    public function __construct(array $repository)
    {
        $this->repository = $repository["aluno"];
    }

    public function processaRequisicao()
    {
        if (validar() && $_SESSION["nivel_acesso"] === 1) 
        {
            
            $nivel = $_SESSION['nivel_acesso'];

            $alunos = $this->repository->all();


            require_once __DIR__ . "/../view/listar_alunos.php";

        }else
        {
        header("Location:/negado");
        }
    }
}
