<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeyValueStorage extends Model
{
    protected $primaryKey = 'key';
    public $incrementing = false;
    protected $table = 'key_value_storage';
    protected $fillable = ['key', 'value'];
}
