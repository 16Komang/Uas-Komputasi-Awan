<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\RoleSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = new User([
            'name' => 'UserTest',
            'role_id' => 2,
            'email' => 'usertest@gmail.com',
            'password' => bcrypt('password'),
        ]);
        $user->save();

        $response = $this->post('/login', [
            'email' => 'usertest@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $response->assertStatus(401);
    }
}
