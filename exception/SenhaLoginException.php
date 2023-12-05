<?php

namespace atrasometro\exception;

class SenhaLoginException extends \Exception
{
    public function __construct($message = "Erro no login ou senha!", $code = 1, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
