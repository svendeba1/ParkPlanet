<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'street', 'city', 'state', 'rrn', 'price', 'pictures', 'startdate', 'enddate'];
    public $timestamps = false;
}
