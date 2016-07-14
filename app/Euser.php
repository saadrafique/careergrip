<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Euser extends Model
{
    protected $fillable = [


            
           'name',
           'username',
           'email',
            'password',
            'confirmation_code',
            'gender'

    ];

}
