<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spaces extends Model
{
    //
    protected $fillable = ['title', 'space_type', 'space_sub_type', 'price', 'address', 'email_user'];
}
