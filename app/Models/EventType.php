<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'tbl_event_Types';
    protected $fillable = [
        'id',
        'name',
    ];
}
