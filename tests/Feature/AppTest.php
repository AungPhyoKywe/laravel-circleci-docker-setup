<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppTest extends TestCase
{

    public function testLogin()
    {
        $response = $this->json('POST',route('api.login'),[

            'email'=>'test54@gmail.com',
            'password'=>'111111',

        ]);

        $response->assertStatus(200);

    }

    public function testExample()
    {
        $response = $this->json('POST',route('api.register'),[
            'name'=>'apk',
            'email'=>'test'.time().'@gmail.com',
            'password'=>'111111',
            'password_confirmation'=>'111111',

        ]);

        $response->assertStatus(200);
    }

    public function testUser()

    {
        $response = $this->get('/api/getUser',
         ['Accept'=>'application/json',
        'Content-Type'=>'application/x-www-form-urlencoded',
        'Authorization'=>'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI1IiwianRpIjoiMmFiOGRmYzJiNzIwNGM1MjkwYzYzOGM3OTU4NzQ2MjEwYzNjNjZlMTQ5MjE2NWE0MjQ3MmIzOWUyYjg0ZWE2NDk4YTUwNzQ4MWZkYWRlMWUiLCJpYXQiOjE1ODQzMzI3MDUsIm5iZiI6MTU4NDMzMjcwNSwiZXhwIjoxNjE1ODY4NzA1LCJzdWIiOiI0Iiwic2NvcGVzIjpbXX0.R60sJa_KF5SCzQgWVk4Jw-MHFB3H7g1wlBX8nfW6RKmSlNrA6WPB_XKO5jTl-aL-XkAHm-K9_UiriscW46Eu3-lp1IGgXE3N_nQ_3CcvcCYggm9jvQsHbCYIAfAideml6QL1gJU08WBbzMIMu5fh6GmOgS01daecIppKt2723wtKOVXPdKUN8lqo8Kp27ZZJviSFL9sQNw0I61NNGbM7OSC5WvCr_zm4M6Jovhj33TkK_ZQlu0nNla73AKa0UNOl7FHG4sUd-XyK1pI0_om0X4CsJArdABmnZNLednwj0aRDfVd29lTQpCTU8jL0xvyk_fZJNIar4b1JUjpxnSQkPX-qX13Aw08JMvbTDbsZ2yoHEI4CwRIYMXgv_AVR2VgKnkfO-scVhDOryjnzGvwBqWAsacapiag_zTPmlywvggIRsEQmCNBIupMH5A87RwMMUpyqok7PWOaNXhvtW3KIu4F3VX2o8DzHilQAkquS8CDRot8v9J0G_FFr-XYXJCnrs40QwLn64VGTxS5ucFKJ7Dm70hBKf-IkhL-By-y-qBJBSD4mcrlX3KxAX6WhfcYmxZCWRJN0NHrDWqggiShlBBEEkPJJ3F81G5sgldVUIX9R1emJqEljo2btOrSX2GXdbvGCV0hsROd8agNpCxOiXdpuX5Lvev3jHuQLY_I18S4']
    );

        $response->assertStatus(200);
    }
}
