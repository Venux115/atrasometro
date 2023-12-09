<?php

use Atrasometro\controller\{
    AprovarUsuarioController,
    TabelaAprovarUsuarioController,
    ErroEmailController,
    LandingPageController,
    LogarController,
    ErroSenhaController,
    FormCadastrarUsuarioExterno,
    CadastrarUsuarioExterno,
    DeletarUsuarioController,
    DeslogarController,
    homeController
};

return [
    "GET|/" => LandingPageController::class,
    "POST|/logar" => LogarController::class,
    "GET|/erro_senha" => ErroSenhaController::class,
    "GET|/erro_email" => ErroEmailController::class,
    "GET|/cadastrar_usuario_externo" => CadastrarUsuarioExterno::class,
    "POST|/cadastrar_usuario_externo" => FormCadastrarUsuarioExterno::class,
    "GET|/home" => homeController::class,
    "GET|/deslogar" => DeslogarController::class,
    "GET|/aprovar_usuario" => TabelaAprovarUsuarioController::class,
    "GET|/deletar_usuario" => DeletarUsuarioController::class

];
