<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    

    public function test_user_get(): void
    {
        $response = $this->get('/api/users');
        $response->assertStatus(200);
    }


    public function testUserId(): void
    {
    
        $user = User::factory()->make();
        $this->withoutMiddleware()->get('/api/users/' . $user->id)
            ->assertStatus(200);
    }

    public function testUserIdAuth(): void
    {
        $this->withoutExceptionHandling();
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/api/users/' . $user->id,['name'=> 'Wass Albert']);
        $response->assertStatus(200);
    }

   

    

    
}
