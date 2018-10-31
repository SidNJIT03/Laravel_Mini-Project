<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarMakeTest extends TestCase
{
    //use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarMakeTest()
    {
        $car = Car::inRandomOrder()->first();
        $this->assertContains($car->make, ["Ford", "Honda", "Toyota"]);
    }
}
