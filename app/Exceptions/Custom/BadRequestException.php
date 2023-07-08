<?php

namespace App\Exceptions\Custom;

use Exception;

class BadRequestException extends Exception
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
                'code' => 'BAD_REQUEST',
                'message' => $this->_message,
                'status' => 400
            ],
            400
        );
    }
}
