<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarYearTypeTest extends TestCase
{
    //use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYearInternalTypeTest()
    {
        $car = Car::inRandomOrder()->first();
        $this->assertInternalType('numeric', $car->year);
    }
}
