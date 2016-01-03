<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    protected $table='materis';
    protected $fillable=['nama','desc'];
}
