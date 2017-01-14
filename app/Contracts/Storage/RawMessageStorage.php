<?php

namespace App\Contracts\Storage;

interface RawMessageStorage
{


    public function save(string $message);
}
