<?php

namespace App\Exceptions\Custom;

use Exception;

class UnauthenticatedException extends Exception
{
    private string $_message;

    public function __construct(string $message)
    {
        $this->_message = $message;
    }

    public function render()
    {
        return response()->json(
            [
                'code' => 'UNAUTHENTICATED',
                'message' => $this->_message,
                'status' => 401
            ],
            401
        );
    }
}
