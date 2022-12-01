<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketType extends Model
{
    use HasFactory;

    protected $table = 'ticket_Types';
    protected $fillable = [
        'id',
        'name',
        'event_id',
        'quantity',
        'price',
    ];

}
