<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "tbl_tickets";
    protected $fillable = [
        'id',
        'ticked_type_id',
        'event_id',
        'ticket_number',
        'ticket_image',
        'price',
        'start_date',
        'end_date',

];
}
