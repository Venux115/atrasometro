<?php

namespace Atrasometro\entity;

class Alunos
{
    private $id;
    private $matricula;
    private $nome;
    private $cursoId;

    private $curso;
    private $turma;

    function __construct($matricula, $nome, $cursoId)
    {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->cursoId = $cursoId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id):void
    {
        $this->id = $id;
    }

    public function getMatricula():string
    {
        return $this->matricula;
    }

    public function setMatricula(string $matricula):void
    {
        $this->matricula = $matricula;
    }

    public function getNome():string
    {
        return $this->nome;
    }

    public function setNome(string $nome):void
    {
        $this->nome = $nome;
    }

    public function getCursoId():int
    {
        return $this->cursoId;
    }

    public function setCursoId(int $cursoId):void
    {
        $this->cursoId = $cursoId;
    }
    
    public function getCurso(): string
    {
        return $this->curso;
    }

    public function setCurso(string $curso):void
    {
        $this->curso = $curso;
    }

    public function getTurma():string
    {
        return $this->turma;
    }
    public function setTurma(string $turma):void
    {
        $this->turma = $turma;
    }
}
