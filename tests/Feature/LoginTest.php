<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_view()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_sign_up()
    {
        $response = $this->get('/sign_up');

        $response->assertStatus(200);
    }
}
