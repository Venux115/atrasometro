<?php

namespace Atrasometro\repository;

use Atrasometro\entity\Alunos;
use PDO;
use Exception;

class AlunosRepository
{
    private $db;
    public function __construct(PDO $conexao)
    {
        $this->db = $conexao;
    }

    public function add(Alunos $aluno)
    {
        try {
            $nome = $aluno->getNome();
            $matricula = $aluno->getMatricula();
            $curso = $aluno->getCursoId();


            $query = $this->db->prepare("INSERT INTO `alunos`(`matricula`, `nomealuno`, `cursoaluno`) VALUES (:matricula, :nome, :curso)");
            $query->bindParam(":matricula", $matricula);
            $query->bindParam(":nome", $nome);
            $query->bindParam(":curso", $curso);

            $query->execute();

            $aluno->setId($this->db->lastInsertId());

            return 0;
        } catch (Exception $e) {
            return  $e->getMessage();
        }
    }

    public function all()
    {
        try {
            $query = $this->db->prepare("SELECT 
            alunos.id_aluno,
            alunos.nomealuno,
            alunos.matricula,
            alunos.cursoaluno,
            cursos.num_curso,
            cursos.nome_curso
            FROM
            alunos   
            JOIN
            cursos ON cursos.id_curso = alunos.cursoaluno");
            $query->execute();

            $alunoList = $query->fetchAll();
            

            $alunos = array_map(
                function ($dados) {
                    $aluno = new Alunos($dados['matricula'], $dados['nomealuno'], $dados['cursoaluno']);
                    $aluno->setCurso($dados['nome_curso']);
                    $aluno->setTurma($dados['num_curso']);
                    $aluno->setId($dados['id_aluno']);
                    return $aluno;
                },
                $alunoList
            );

            return $alunos;
        } catch (Exception $e) {
            return  $e->getMessage();
        }
    }
}
