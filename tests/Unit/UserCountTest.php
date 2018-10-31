<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserCountTest extends TestCase
{
    //use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserCountTest()
    {
        $userCount = User::all();
        $userCount->count();
        $this->assertCount(50, $userCount);
    }
}
