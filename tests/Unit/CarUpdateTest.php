<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarUpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarUpdateTest()
    {
        $car = Car::all()->find(1);
        $car->year = 2000;
        $car->save();
        $this->assertDatabaseHas('cars', ['year' => $car->year]);
    }
}
