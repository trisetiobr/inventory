<?php

namespace App\Http\Controllers;

use App\Services\{ LoginService };

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $LoginService;
    public function __construct(LoginService $loginService)
    {
        //
        $this->LoginService = $loginService;
    }

    // login
    public function login()
    {
      $response = $this->LoginService->login();

      return response()->json( $response );
    }

    // logout
    public function logout()
    {

    }
}
