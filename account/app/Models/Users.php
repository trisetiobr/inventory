<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
  use SoftDeletes;
  
  protected $table = 'users';

  protected $guarded = [];

  protected $hidden = [ 'password' ];
}
