<?php

namespace App\Services;

use App\Datas\UserData;

class UserService
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $UserData;
    public function __construct(UserData $userData)
    {
      $this->UserData = $userData;
    }

    public function all()
    {
      return $this->UserData->all();
    }
}
