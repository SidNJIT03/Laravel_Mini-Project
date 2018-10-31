<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarCountTest extends TestCase
{
    //use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarCountTest()
    {
        $carCount = Car::all();
        $carCount->count();
        $this->assertCount(50, $carCount);
    }
}
