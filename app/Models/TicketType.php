<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class TicketType extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'tbl_ticket_Types';
    protected $fillable = [
        'id',
        'name',
        'event_id',
        'quantity',
        'price',
        'image',
    ];

}
