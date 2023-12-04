<?php


use Atrasometro\controller\{
    LandingPageController,
    LogarController,
    ErroSenhaController
};
    return [
        "GET|/" => LandingPageController::class,
        "POST|/logar" => LogarController::class,
        "GET|/erro_senha" => ErroSenhaController::class
    ];