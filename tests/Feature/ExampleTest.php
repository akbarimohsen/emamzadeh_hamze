<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    public function test_a_user_can_see_a_category_in_ofogh_page()
    {

        $response = $this->get('/ofogh');

        $response->assertSee('testName');

    }
}
