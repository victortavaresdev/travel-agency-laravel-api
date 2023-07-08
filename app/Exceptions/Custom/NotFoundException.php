<?php

namespace App\Exceptions\Custom;

use Exception;

class NotFoundException extends Exception
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
                'code' => 'NOT_FOUND',
                'message' => $this->_message,
                'status' => 404
            ],
            404
        );
    }
}
