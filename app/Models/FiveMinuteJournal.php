<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiveMinuteJournal extends Model
{

    protected $casts = [

    'date' => 'datetime',
];
    use HasFactory;
}
