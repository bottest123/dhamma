<?php

namespace App\Services\Storage;

use App\Contracts\Storage\KeyValueStorage as KeyValueStorageInterface;
use App\Models\KeyValueStorage;

class PostgresKeyValueStorage implements KeyValueStorageInterface
{


    /**
     * @inheritDoc
     */
    public function set(string $key, $value)
    {
        KeyValueStorage::updateOrCreate(['key' => $key], ['value' => $value]);
    }


    /**
     * @inheritDoc
     */
    public function del(string $key)
    {
        KeyValueStorage::whereKey($key)->delete();
    }


    /**
     * @inheritDoc
     */
    public function get(string $key, $default = null)
    {
        $obj = KeyValueStorage::whereKey($key)->first();
        return (is_null($obj))
            ? $default
            : $obj->value;
    }
}
