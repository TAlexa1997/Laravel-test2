<?php

namespace Tests\Feature;

use App\Models\Additional;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdditionalTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/api/additionals');

        $response->assertStatus(200);
    }

    public function test_outfit_post(): void
    {
        $response = $this->post('/api/additionals', ['name' => 'kutya', 'description' => 'macska']);
        $response->assertStatus(200);
    }

    public function testUserId() : void {

    $additional = Additional::factory()->make();
    $this->get('/api/additionals/' . $additional->id)
    ->assertStatus(200);
}


    // public function test_outfit_delete(): void
    // {  $response = $this->post('/api/additionals', ['name' => 'ló', 'description' => 'uguzfuz']);
    //     $response = $this->delete('/api/additionals/20');
    //     $response->assertStatus(200);
    // }
}
