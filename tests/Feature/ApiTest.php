<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->postJson(
            route('test'),
            [
                'address' => [
                    'country' => 'Timbuktu',
                ],
            ],
        );

        $response->assertStatus(200);
    }
}
