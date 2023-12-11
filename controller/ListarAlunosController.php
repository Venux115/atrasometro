<?php

namespace Atrasometro\controller;

class ListarAlunosController implements Controller
{
    public function __construct(private array $repository)
    {
        $this->repository = $repository["aluno"];
    }

    public function processaRequisicao()
    {
        if (validar() && $_SESSION["nivel_acesso"] === 1) 
        {
            
            $nivel = $_SESSION['nivel_acesso'];

            $sql = "SELECT 
            alunos.id_aluno,
            alunos.nomealuno,
            alunos.matricula,
            cursos.num_curso,
            cursos.nome_curso
            FROM
            alunos   
            JOIN
            cursos ON cursos.id_curso = alunos.cursoaluno";
            $busca = mysqli_query($conexao,$sql);


        }else
        {
        header("Location:/negado");
        }
    }
}
