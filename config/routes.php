<?php

use Atrasometro\controller\{
    ErroEmailController,
    LandingPageController,
    LogarController,
    ErroSenhaController
};

return [
    "GET|/" => LandingPageController::class,
    "POST|/logar" => LogarController::class,
    "GET|/erro_senha" => ErroSenhaController::class,
    "GET|/erro_email" => ErroEmailController::class
];
