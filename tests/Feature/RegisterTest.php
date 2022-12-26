<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\RoleSeeder;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RegisterTest extends TestCase
{

    public function inputan_benar()
    {
        $response = $this->post('/register', [
            'name' => 'Test',
            'email' => 'user@mail.com',
            'role_id' => 2,
            'password' => 'password'
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseHas('users', [
            'name' => 'Test',
            'email' => 'user@mail.com',
        ]);
    }

    // public function inputan_email_duplicate()
    // {
    //     $this->get('/registerPage');
    //     $response = $this->post('/register', [
    //         'name' => 'Test',
    //         'email' => 'none@gmail.com',
    //         'role_id' => 2,
    //         'password' => 'password'
    //     ]);

    //     $response->assertStatus(302);

    //     $this->assertDatabaseHas('users', [
    //         'name' => 'Test',
    //         'email' => 'user@mail.com',
    //     ]);
    // }

    // public function inputan_password_invalid()
    // {
    //     $this->get('/registerPage');
    //     $response = $this->post('/register', [
    //         'name' => 'Test',
    //         'email' => 'user12341@mail.com',
    //         'role_id' => 2,
    //         'password' => 'pass'
    //     ]);

    //     $response->assertStatus(302);

    //     $this->assertDatabaseHas('users', [
    //         'name' => 'Test',
    //         'email' => 'user12341@mail.com',
    //     ]);
    // }
}
