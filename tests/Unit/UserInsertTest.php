<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserInsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserInsertTest()
    {
        $user = factory(\App\User::class)->create();
        $this->assertDatabaseHas('users', ['name' => $user->name]);
    }
}
