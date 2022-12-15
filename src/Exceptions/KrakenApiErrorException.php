<?php

namespace Butschster\Kraken\Exceptions;

use Exception;

class KrakenApiErrorException extends Exception
{
    public static function fromArray(array $errors): self
    {
        $message = '';

        foreach ($errors as $error) {
            $message .= $error;
        }

        return new self($message);
    }
}
