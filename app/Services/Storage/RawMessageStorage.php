<?php

namespace App\Services\Storage;

use App\Contracts\Storage\RawMessageStorage as RawMessageStorageInterface;
use App\Models\RawMessage;

class RawMessageStorage implements RawMessageStorageInterface
{


    public function save(string $message)
    {
        RawMessage::create([
            'json_data' => $message
        ]);
    }
}
