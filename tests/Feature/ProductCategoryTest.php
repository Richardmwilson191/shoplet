<?php

namespace Tests\Feature;

use App\Models\ProductCategory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductCategoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_category_can_be_added()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/api/product/category', [
            'name' => 'Phones',
            'desc' => 'Cell phones'
        ]);

        $response->assertStatus(201);
        $this->assertCount(1, ProductCategory::all());
    }
}
