<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserDeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserDeleteTest()
    {
        $user = User::all()->find(7);
        $user->delete();
        $this->assertDatabaseMissing('users', ['name' => $user->name]);
    }
}
