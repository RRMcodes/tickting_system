<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Event extends Model
{
    use HasFactory;

    protected $table = 'Events';
    protected $fillables = [
        'event_id',
        'type',
        'start_date',
        'end_date',
        'details',
        'quantity',

    ];
}
