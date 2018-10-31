<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarDeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarDeleteTest()
    {
        $car = Car::all()->find(6);
        $car->delete();
        $this->assertDatabaseMissing('cars', ['model' => $car->model]);
    }
}
