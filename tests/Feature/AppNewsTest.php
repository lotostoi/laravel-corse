<?php

namespace Tests\Feature;

use Tests\TestCase;

class AppNews extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_categories()
    {
        $response = $this->get(route('categories'));

        $response->assertStatus(200);
    }
}
