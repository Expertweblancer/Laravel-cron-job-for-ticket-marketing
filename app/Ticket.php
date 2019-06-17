<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    protected $fillable = [
        'name', 'price', 'sale_date','resale_date','image','description'
    ];
}
