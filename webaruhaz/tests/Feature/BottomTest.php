<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BottomTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_bottom_delete(): void
    {  $response = $this->post('/api/bottoms', ['name' => 'ló', 'description' => 'uguzfuz']);
        $response = $this->delete('/api/bottoms/1');
        $response->assertStatus(200);
    }
}
