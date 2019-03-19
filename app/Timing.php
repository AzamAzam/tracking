<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timing extends Model
{
    protected $fillable = [
        'userid', 'dateofattendance', 'hours'
    ];
}
