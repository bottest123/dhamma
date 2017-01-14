<?php

namespace App\Models;

use Eloquent\Dialect\Json;
use Illuminate\Database\Eloquent\Model;

class RawMessage extends Model
{
    use Json;
    protected $jsonColumns = ['json_data'];
    protected $fillable = ['json_data'];
}
