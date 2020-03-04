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

            'email'=>'test227323@gmail.com',
            'password'=>'111111',

        ]);

        $response->assertStatus(500);
    }
    /**
     * A basic feature getUser.
     *
     * @return void
     */
    public function getUser()

    {
        $response = $this->json('POST',route('api.getUser'));


        $response->assertStatus(200);
    }
}
