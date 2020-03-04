<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->json('POST',route('api.name'),[

            'email'=>'test22732@gmail.com',
            'password'=>'111111',

        ]);

        $response->assertStatus(200);
    }

    public function getUser()

    {
        $response = $this->json('POST',route('api.getUser'));


        $response->assertStatus(200);
    }
}
