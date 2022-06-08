<?php


use Phinx\Seed\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

class UserSeeder extends AbstractSeed
{
  /**
   * Run Method.
   *
   * Write your database seeder using this method.
   *
   * More information on writing seeders is available here:
   * https://book.cakephp.org/phinx/0/en/seeding.html
   */
  public function run()
  {
    $hasher = new DefaultPasswordHasher();
    $password = $hasher->hash('demo123');
    $data = [
      [
        'username'    => 'Sausages',
        'name'    => 'demoSeed',
        'lastname'    => 'demoSeed',
        'password'    => $password,
        'role'    => 'visit',
        'created' => date('Y-m-d H:i:s'),
      ],
      [
        'username'    => 'Soft',
        'name'    => 'demoSeed',
        'lastname'    => 'demoSeed',
        'password'    => $password,
        'role'    => 'visit',
        'created' => date('Y-m-d H:i:s'),
      ],
      [
        'username'    => 'Account',
        'name'    => 'demoSeed',
        'lastname'    => 'demoSeed',
        'password'    => $password,
        'role'    => 'visit',
        'created' => date('Y-m-d H:i:s'),
      ],
      [
        'username'    => 'Metal',
        'name'    => 'demoSeed',
        'lastname'    => 'demoSeed',
        'password'    => $password,
        'role'    => 'visit',
        'created' => date('Y-m-d H:i:s'),
      ],
      [
        'username'    => 'card',
        'name'    => 'demoSeed',
        'lastname'    => 'demoSeed',
        'password'    => $password,
        'role'    => 'visit',
        'created' => date('Y-m-d H:i:s'),
      ],
      [
        'username'    => 'Metal',
        'name'    => 'demoSeed',
        'lastname'    => 'demoSeed',
        'password'    => $password,
        'role'    => 'visit',
        'created' => date('Y-m-d H:i:s'),
      ],
      [
        'username'    => 'Operations',
        'name'    => 'demoSeed',
        'lastname'    => 'demoSeed',
        'password'    => $password,
        'role'    => 'visit',
        'created' => date('Y-m-d H:i:s'),
      ],
      [
        'username'    => 'Soap',
        'name'    => 'demoSeed',
        'lastname'    => 'demoSeed',
        'password'    => $password,
        'role'    => 'visit',
        'created' => date('Y-m-d H:i:s'),
      ],
      [
        'username'    => 'Andorra',
        'name'    => 'demoSeed',
        'lastname'    => 'demoSeed',
        'password'    => $password,
        'role'    => 'visit',
        'created' => date('Y-m-d H:i:s'),
      ],
      [
        'username'    => 'Open-source',
        'name'    => 'demoSeed',
        'lastname'    => 'demoSeed',
        'password'    => $password,
        'role'    => 'visit',
        'created' => date('Y-m-d H:i:s'),
      ],
      [
        'username'    => 'Soft',
        'name'    => 'demoSeed',
        'lastname'    => 'demoSeed',
        'password'    => $password,
        'role'    => 'visit',
        'created' => date('Y-m-d H:i:s'),
      ],
      [
        'username'    => 'HDD',
        'name'    => 'demoSeed',
        'lastname'    => 'demoSeed',
        'password'    => $password,
        'role'    => 'visit',
        'created' => date('Y-m-d H:i:s'),
      ],
      [
        'username'    => 'program',
        'name'    => 'demoSeed',
        'lastname'    => 'demoSeed',
        'password'    => $password,
        'role'    => 'visit',
        'created' => date('Y-m-d H:i:s'),
      ],
      [
        'username'    => '(E.M.U.-6)',
        'name'    => 'demoSeed',
        'lastname'    => 'demoSeed',
        'password'    => $password,
        'role'    => 'visit',
        'created' => date('Y-m-d H:i:s'),
      ],
    ];

    $posts = $this->table('users');
    $posts->insert($data) ->saveData();
  }
}
