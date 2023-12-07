<?php

use Atrasometro\controller\{
    ErroEmailController,
    LandingPageController,
    LogarController,
    ErroSenhaController,
    FormCadastrarUsuarioExterno,
    CadastrarUsuarioExterno,
    DeslogarController,
    homeController
};

return [
    "GET|/" => LandingPageController::class,
    "POST|/logar" => LogarController::class,
    "GET|/erro_senha" => ErroSenhaController::class,
    "GET|/erro_email" => ErroEmailController::class,
    "GET|/cadastrar_usuario_externo" => CadastrarUsuarioExterno::class,
    "POST|/cadastrar_usuario_externo"=> FormCadastrarUsuarioExterno::class,
    "GET|/home" => homeController::class,
    "GET|/deslogar" => DeslogarController::class
];
