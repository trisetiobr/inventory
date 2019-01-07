<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PDO;
use PDOException;

class CreateDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install:database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Membuat database baru';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */

    // tutorial https://anthonysterling.com/posts/using-an-artisan-command-to-create-a-database-in-laravel-or-lumen.html
    public function handle()
    {
      $database = env('DB_DATABASE', false);

              if (! $database) {
                  $this->info('Skipping creation of database as env(DB_DATABASE) is empty');
                  return;
              }

              try {
                  $pdo = $this->getPDOConnection(env('DB_HOST'), env('DB_PORT'), env('DB_USERNAME'), env('DB_PASSWORD'));

                  $pdo->exec(sprintf(
                      'CREATE DATABASE IF NOT EXISTS %s CHARACTER SET %s COLLATE %s;',
                      $database,
                      env('DB_CHARSET'),
                      env('DB_COLLATION')
                  ));

                  $this->info(sprintf('Successfully created %s database', $database));
              } catch (PDOException $exception) {
                  $this->error(sprintf('Failed to create %s database, %s', $database, $exception->getMessage()));
              }
    }

    /**
     * @param  string $host
     * @param  integer $port
     * @param  string $username
     * @param  string $password
     * @return PDO
     */
    private function getPDOConnection($host, $port, $username, $password)
    {
        return new PDO(sprintf('mysql:host=%s;port=%d;', $host, $port), $username, $password);
    }

}
