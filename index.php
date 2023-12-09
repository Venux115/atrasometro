<?php 

    session_start();

    require_once __DIR__ ."/vendor/autoload.php";
    

    use atrasometro\config\Conexao;
    use Atrasometro\repository\UsuarioRepository;

    function validar():bool
    {
        if (!$_SESSION['logado']) {
            header("Location:/deslogar");
            return false;
        }else{
            return true;
        }
    }

    $conexao = new Conexao();
    $pdo = $conexao->conectar();
    
    $usuarioRepository = new UsuarioRepository($pdo);

    $repository =
    [
        "usuario" => $usuarioRepository,
    ];

    $caminho = $_SERVER['PATH_INFO'] ?? "/";  
    $request = $_SERVER['REQUEST_METHOD'];

    $Route = require_once __DIR__ ."/config/routes.php";
    $controller = new $Route["$request|$caminho"]($repository);
    $controller->processaRequisicao();