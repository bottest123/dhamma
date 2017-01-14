<?php

namespace App\Contracts\Storage;

interface KeyValueStorage
{


    /**
     * @param string $key
     * @param mixed $value
     * @return void
     */
    public function set(string $key, $value);


    /**
     * @param string $key
     * @return void
     */
    public function del(string $key);


    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key);
}
