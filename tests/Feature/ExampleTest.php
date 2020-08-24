<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetFiveBooksWithUserName()
    {
        $response = $this->json('get', 'api', [
            'books' => [
                'take' => 5,
                'select' => 'title',
                'with' => [
                    'user' => [
                        'select' => 'name'
                    ]
                ]
            ]
        ]);

        $response->assertStatus(200);
        $response->assertJsonCount(5, 'data.books');
        $response->assertJsonStructure([
            'data' => [
                'books' => [[
                    'id',
                    'title',
                    'user' => [
                        'id',
                        'name'
                    ]
                ]]
            ]
        ]);
    }
}
