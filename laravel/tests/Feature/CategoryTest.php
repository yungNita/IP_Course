<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    // Category-001: Test get all categories API access
    public function test_get_all_categories_api_access()
    {
        $response = $this->getJson('/api/category');
        $response->assertStatus(200);
    }

    // Category-002: Test empty categories returns empty array
    public function test_empty_categories_returns_empty_array()
    {
        $response = $this->getJson('/api/category');
        $response->assertStatus(200)
                 ->assertExactJson([]);
    }

    // Category-003: Test created category appears in response
    public function test_created_category_appears_in_response()
    {
        Category::create([
            'name' => 'Test Category',
        ]);

        $response = $this->getJson('/api/category');
        $response->assertStatus(200)
                 ->assertJsonFragment([
                     'name' => 'Test Category'
                 ]);
    }

    // Category-004: Test category creation
    public function test_category_creation()
    {
        $response = $this->postJson('/api/category', [
            'name' => 'New Category',
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('categories', [
            'name' => 'New Category',
        ]);
    }

    // Category-005: Test validation for missing name field
    public function test_validation_for_missing_name_field()
    {
        $response = $this->postJson('/api/category', []);
        $response->assertStatus(422)
                 ->assertJsonValidationErrors(['name']);
    }

    // Category-006: Test retrieve single category
    public function test_retrieve_single_category()
    {
        $category = Category::create([
            'name' => 'Single Category',
        ]);

        $response = $this->getJson("/api/category/{$category->id}");
        $response->assertStatus(200)
                 ->assertJson([
                     'id' => $category->id,
                     'name' => 'Single Category',
                 ]);
    }

    // Category-007: Test invalid category ID returns 404
    public function test_invalid_category_id_returns_404()
    {
        $response = $this->getJson('/api/category/999999');
        $response->assertStatus(404);
    }

    // Category-008: Test category update
    public function test_can_update_category(): void
     {
         $category = new Category();
         $category->name = 'Old Name';
         $category->save();
     
         $response = $this->patch("/api/category/{$category->id}", [
            'name' => 'New Name',
        ]);
        
     
         $response->assertStatus(200)
                  ->assertJson([
                      'id' => $category->id,
                      'name' => 'New Name',
                  ]);
     }

    // Category-009: Test category deletion
    public function test_category_deletion()
    {
        $category = Category::create([
            'name' => 'Category to Delete',
        ]);

        $response = $this->deleteJson("/api/category/{$category->id}");
        $response->assertStatus(200);
    }

    // Category-010: Test deleted category is really gone
    public function test_deleted_category_cannot_be_found()
    {
        $category = Category::create([
            'name' => 'Soon to be deleted',
        ]);

        $this->deleteJson("/api/category/{$category->id}");

        $response = $this->getJson("/api/category/{$category->id}");
        $response->assertStatus(404);
    }
}
