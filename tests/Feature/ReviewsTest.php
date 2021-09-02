<?php

namespace Tests\Feature;

use Tests\TestCase;

class ReviewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_reviews_stuts()
    {
        $response = $this->get(route('reviews'));
        $response->assertStatus(200);
    }
    public function test_add_reviews_view()
    {
        $response = $this->get(route('reviews'));
        $response->assertViewIs('app.reviews');
    }
    public function test_add_reviews_is_background()
    {
        $response = $this->get(route('reviews'));
        $response->assertViewHas('background', '/assets/img/bg-post.jpg');
    }
    public function test_add_reviews_is_title()
    {
        $response = $this->get(route('reviews'));
        $response->assertViewHas('title', 'Reviews');
    }

}
