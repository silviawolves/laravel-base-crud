<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    public $fillable = ['title', 'description', 'thumb', 'price','series', 'date', 'type'];
}