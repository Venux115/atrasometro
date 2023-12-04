<?php

namespace atrasometro\exception;

class EmailLoginException extends \Exception
{
    public function __construct($message = "Erro ao entrar, emails duplicados.", $code = 1, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
