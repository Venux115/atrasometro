<?php 

    session_start();

    require_once __DIR__ ."/vendor/autoload.php";
    

    use atrasometro\config\Conexao;
    use Atrasometro\repository\UsuarioRepository;

    $conexao = new Conexao();
    $pdo = $conexao->conectar();
    
    $usuarioRepository = new UsuarioRepository($pdo);

    $repository =
    [
        "usuario" => $usuarioRepository,
    ];

    $caminho = $_SERVER['REQUEST_URI'];  
    $request = $_SERVER['REQUEST_METHOD'];

    $Route = require_once __DIR__ ."/config/routes.php";
    $controller = new $Route["$request|$caminho"]($repository);
    $controller->processaRequisicao();