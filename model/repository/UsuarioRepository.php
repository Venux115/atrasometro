<?php
namespace Atrasometro\repository;

use atrasometro\exception\SenhaLoginException;
use PDO;
use Atrasometro\entity\Usuarios;
use atrasometro\exception\EmailLoginException;
use Exception;

    class UsuarioRepository{
        private $db;
        public function __construct(PDO $conexao)
        {
            $this->db = $conexao;
        }

        public function logar(string $email, string $senha)
        {
            try{
            $query = $this->db->prepare("SELECT `mail_usuario`, `senha_usuario` FROM `usuarios` WHERE `mail_usuario` = :email and `status` = 'Ativo' ;");
            $query->bindParam(":email", $email);
            $query->execute();

            $rows = $query->rowCount();
            $dados = $query->fetchAll(PDO::FETCH_ASSOC);
        
            
            if ($rows != 1)
            {
                throw new EmailLoginException();
            }

            
            if (md5($senha) == $dados[0]['senha_usuario'])
            {
                return 0;
            }else{
                throw new SenhaLoginException();
            }
            
            //implementar verificacao mais forte

            /**if (password_verify($senha, $dados["senha_usuario"]))
            {
                return true;

            }**/
            
            }catch(SenhaLoginException $e)
            {
                return $e->getCode();
            }catch (EmailLoginException $e)
            {
                return $e->getCode();
            }catch (Exception $e)
            {
                echo "erro " . $e->getMessage();
                
            }
        }

        
    }