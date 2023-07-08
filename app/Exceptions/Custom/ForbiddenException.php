<?php

namespace App\Exceptions\Custom;

use Exception;

class ForbiddenException extends Exception
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
                'code' => 'FORBIDDEN',
                'message' => $this->_message,
                'status' => 403
            ],
            403
        );
    }
}
