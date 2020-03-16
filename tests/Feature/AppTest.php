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

    // public function testExample()
    // {
    //     $response = $this->json('POST',route('api.register'),[
    //         'name'=>'apk',
    //         'email'=>'test09@gmail.com',
    //         'password'=>'111111',
    //         'password_confirmation'=>'111111',

    //     ]);

    //     $response->assertStatus(200);
    // }

    // public function testUser()

    // {
    //     $response = $this->json('POST',route('api.getUser'),
    //     [
    //         'Accept'=>'application/json',
    //         'Authorization'=>'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNmM0N2IyZGRmZTg4MzRiMTljMDMwZjA5YzkwMzJlZmM4NTBkNGNkMTUzZjUwZGM3NTU4OTUxNGU3OGQ0NjIzNDAxNzBhNTM1ZmQ1NWE0OGYiLCJpYXQiOjE1ODQzMzEyNjUsIm5iZiI6MTU4NDMzMTI2NSwiZXhwIjoxNjE1ODY3MjY1LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.ouBgUWcQfjDN2UgF0M4_bvBrP8bKyG6Q2Hv01DPZhGpftkUMy-D-ylsYs3uo-ffftwrUaFBRWiGqpW_-OjuUVCayyaHzWgrvdNj3iuTl5v0v-7dni3j_DfwDcfbDspHl9lk3bLasqOOqRTn04ZGSYVOQunGyFxdu47IkceBkxoYWUGGH7ibLTdfVcI2Cp81IZQSzgO5rUqrmJFJbuJigSMzp_40mtHIHY_imEeBzft0ZTfyQqMuPzCi5ZeJ9BkBaVtHZLw-j-R8OrauS6c55nvDu_0j9yprjSWO62FzpGJJrp82gc5YIPU2fO8eZXP0r3HccGgO3jKhwHykO9axdVrAkXb6-MwDK_NwGRpZgm9cJ9T9PugIYCs4q5O49fpNCgrH_grti0qp2FQzvBD0gURBWbxokyTzemNvsIsmNJu-awq4jTekBW7QYtknhCvBYp3yFdMY3-4kP_qDpraU_jX1viaZiTiRzXJbuuCWY6cmtCBOYuacVg1QveKWROc5XVhH0I_W-O527E84Ie8iaVxKFoVuwQsSsXewzYozYsSjkDT6E3sH-QrwAfm2U3fQQalvRvnbDho5VchSs-s9dYB81aZb8ohTMTukMEocPrJoCyKrrRfH27P_ziliILRgXf1boRsi7BSTcVeSKSIPJ5n6I27DdgTJuy4D1U5XN-3k',
    //         'Content-Type'=>'application/x-www-form-urlencoded',
    //     ]
    // );


    //     $response->assertStatus(200);
    // }
}
