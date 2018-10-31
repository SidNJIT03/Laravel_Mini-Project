<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserUpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserUpdateTest()
    {
        $user = User::all()->find(1);
        $user->name = 'Steve Smith';
        $user->save();
        $this->assertDatabaseHas('users', ['name' => $user->name]);
    }
}
