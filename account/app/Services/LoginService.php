<?php

namespace App\Services;

use App\Services\{ UserService };

use GuzzleHttp\Client;
use GuzzleHttp\Promise\PromiseInterface;

class LoginService
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $UserService;
    public function __construct(UserService $userService)
    {
      $this->UserService = $userService;
    }

    public function login()
    {

      /*$client = new Client(); //GuzzleHttp\Client
      $client = new \GuzzleHttp\Client();


      $promise1 = $client->getAsync('localhost/test/index.php')->then(
          function ($response) {
              return $response->getBody();
          }, function ($exception) {
              return $exception->getMessage();
          }
      );

      $promise2 = $client->getAsync('localhost/test/index2.php')->then(
          function ($response) {
              return $response->getBody();
          }, function ($exception) {
              return $exception->getMessage();
          }
      );

      echo '<b>This will not wait for the previous request to finish to be displayed!</b>';

      $response2 = $promise2->wait();
      $response1 = $promise1->wait();

      echo $response1;
      echo $response2;
*/
      return [
        'status' => 1,
        'data' => [ 'username' => 'tester', 'token' => '123456' ],
        'message' => 'success',
      ];
      // return $this->UserService->all();
    }
}
