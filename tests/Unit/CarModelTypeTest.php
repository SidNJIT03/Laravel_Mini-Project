<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarModelTypeTest extends TestCase
{
    //use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYearInternalTypeTest()
    {
        $car = Car::OrderBy('model')->first();
        $this->assertInternalType('string', $car->model);
    }
}
