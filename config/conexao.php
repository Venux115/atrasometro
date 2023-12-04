<?php
namespace atrasometro\config;

use PDO;
use PDOException;

class Conexao{
    private $conexao;
    private $host = 'localhost';
    private $dbname = 'atrasometrox';
    private $user = 'root';
    private $pass = '1212';

    public function conectar() {
        try {
            $conexao =  $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->pass"
            );

            return $conexao;

        } catch (PDOException $e) {
            echo '<p>'.$e->getMessage().'</p>';
        }
    }
}



