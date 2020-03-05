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
        $response = $this->json('POST',route('api.register'),[
            'name'=>'apk',
            'email'=>'test2273344443@gmail.com',
            'password'=>'111111',
            'password_confirmation'=>'111111',

        ]);


        $response->assertStatus(200);
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
