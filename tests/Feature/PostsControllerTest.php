<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;

class PostsControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_create_post()
    {
        // $this->post('save_post',[
        //     'title' => 'Test Title',
        //     'description' => 'Test Description',
        //     'image' => '1717675451.jpg',
        // ]);

        // $this->assertEquals(1,Post::count());

        // $response = $this->get('/');

        // $response->assertStatus(200);
    }
}
