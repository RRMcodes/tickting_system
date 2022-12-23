<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;



class Event extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'tbl_events';
    protected $fillable = [
        'id',
        'name',
        'type',
        'start_date',
        'end_date',
        'details',
        'quantity',
    ];

    public function ticketType(){
        return $this->hasMany(TicketType::class,'event_id','id');
    }
}
