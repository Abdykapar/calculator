<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'classes';

    protected $fillable = ['id','name','rate','insurance_contract','insurance_rate'];

    protected $dates = ['created_at'];
}
