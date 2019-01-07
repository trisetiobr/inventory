<?php

namespace App\Datas;
use App\Models\Users;

class UserData
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    public function all()
    {
      return Users::all();
    }

}
