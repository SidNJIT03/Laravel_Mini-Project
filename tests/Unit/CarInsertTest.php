<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarInsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarInsertTest()
    {
        $car = factory(\App\Car::class)->create();
        $this->assertDatabaseHas('cars', ['model' => $car->model]);
    }
}
