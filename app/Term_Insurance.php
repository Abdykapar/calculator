<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term_Insurance extends Model
{
    protected $fillable = ['id','name','size_insurance'];

    protected $table = 'term_insurances';
}
