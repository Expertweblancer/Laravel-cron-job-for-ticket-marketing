<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticketweb extends Model
{
    protected $fillable = [
        'name',  'address',' date'
    ];
}
