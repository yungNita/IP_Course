<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test ID: Category-001
     * Description: Check if we can access the get all categories API
     * Precondition: None
     * Test Steps: 1. Hit the get all categories API endpoint
     *             2. Check if the response status is 200
     * Test Data: None
     * Expected Result: The response status should be 200
     * Actual Result: The response status is 200
     * Status: Passed
     * Remark: None
     */
    public function test_get_all_categories_api_access()
    {
        $response = $this->getJson('/api/category');
        $response->assertStatus(200);
    }

    /**
     * Test ID: Category-002
     * Description: Check if empty categories returns empty array
     * Precondition: Database has no categories
     * Test Steps: 1. Ensure categories table is empty
     *             2. Hit the get all categories API endpoint
     *             3. Check if response contains empty array
     * Test Data: None
     * Expected Result: Response should contain exact empty array
     * Actual Result: Response contains exact empty array
     * Status: Passed
     * Remark: None
     */
    public function test_empty_categories_returns_empty_array()
    {
        $response = $this->getJson('/api/category');
        $response->assertStatus(200)
                 ->assertExactJson([]);
    }

    /**
     * Test ID: Category-003
     * Description: Check if created category appears in response
     * Precondition: None
     * Test Steps: 1. Create a test category
     *             2. Hit the get all categories API endpoint
     *             3. Check if response contains the created category
     * Test Data: ['name' => 'Test Category']
     * Expected Result: Response should contain the created category
     * Actual Result: Response contains the created category
     * Status: Passed
     * Remark: None
     */
    public function test_created_category_appears_in_response()
    {
        Category::create(['name' => 'Test Category']);

        $response = $this->getJson('/api/category');
        $response->assertStatus(200)
                 ->assertJsonFragment(['name' => 'Test Category']);
    }

    /**
     * Test ID: Category-004
     * Description: Check if we can create a new category
     * Precondition: None
     * Test Steps: 1. Send POST request to create category endpoint
     *             2. Check if response status is 201
     *             3. Verify category exists in database
     * Test Data: ['name' => 'New Category']
     * Expected Result: Response status should be 201 and category should be created
     * Actual Result: Response status is 201 and category is created
     * Status: Passed
     * Remark: None
     */
    public function test_category_creation()
    {
        $response = $this->postJson('/api/category', ['name' => 'New Category']);

        $response->assertStatus(201);
        $this->assertDatabaseHas('categories', ['name' => 'New Category']);
    }

    /**
     * Test ID: Category-005
     * Description: Check if validation works for missing name field
     * Precondition: None
     * Test Steps: 1. Send POST request without name field
     *             2. Check if response status is 422
     * Test Data: Empty array
     * Expected Result: Response status should be 422 with validation error
     * Actual Result: Response status is 422 with validation error
     * Status: Passed
     * Remark: None
     */
    public function test_validation_for_missing_name_field()
    {
        $response = $this->postJson('/api/category', []);
        $response->assertStatus(422)
                 ->assertJsonValidationErrors(['name']);
    }

    /**
     * Test ID: Category-006
     * Description: Check if we can retrieve a single category
     * Precondition: A category exists
     * Test Steps: 1. Create a test category
     *             2. Hit the get category endpoint with its ID
     *             3. Check if response contains the category
     * Test Data: ['name' => 'Single Category']
     * Expected Result: Response should contain the requested category
     * Actual Result: Response contains the requested category
     * Status: Passed
     * Remark: None
     */
    public function test_retrieve_single_category()
    {
        $category = Category::create(['name' => 'Single Category']);

        $response = $this->getJson("/api/category/{$category->id}");
        $response->assertStatus(200)
                 ->assertJson([
                     'id' => $category->id,
                     'name' => 'Single Category',
                 ]);
    }

    /**
     * Test ID: Category-007
     * Description: Check if invalid category ID returns 404
     * Precondition: None
     * Test Steps: 1. Hit the get category endpoint with invalid ID
     *             2. Check if response status is 404
     * Test Data: ID: 999999 (non-existent)
     * Expected Result: Response status should be 404
     * Actual Result: Response status is 404
     * Status: Passed
     * Remark: None
     */
    public function test_invalid_category_id_returns_404()
    {
        $response = $this->getJson('/api/category/999999');
        $response->assertStatus(404);
    }

    /**
     * Test ID: Category-008
     * Description: Check if we can update a category
     * Precondition: A category exists
     * Test Steps: 1. Create a test category
     *             2. Send PATCH request to update the category
     *             3. Check if response contains updated data
     * Test Data: ['name' => 'New Name']
     * Expected Result: Response should contain the updated category data
     * Actual Result: Response contains the updated category data
     * Status: Passed
     * Remark: None
     */
    public function test_can_update_category()
    {
        $category = Category::create(['name' => 'Old Name']);
        $response = $this->patchJson("/api/category/{$category->id}", ['name' => 'New Name',]);

        $response->assertStatus(200)
                 ->assertJson([
                     'id' => $category->id,
                     'name' => 'New Name',
                 ]);
    }

    /**
     * Test ID: Category-009
     * Description: Check if we can delete a category
     * Precondition: A category exists
     * Test Steps: 1. Create a test category
     *             2. Send DELETE request to delete the category
     *             3. Check if response status is 200
     * Test Data: ['name' => 'Category to Delete']
     * Expected Result: Response status should be 200
     * Actual Result: Response status is 200
     * Status: Passed
     * Remark: None
     */
    public function test_category_deletion()
    {
        $category = Category::create(['name' => 'Category to Delete']);
        $response = $this->deleteJson("/api/category/{$category->id}");
        $response->assertStatus(200);
    }

    /**
     * Test ID: Category-010
     * Description: Check if deleted category is really gone
     * Precondition: A category was deleted
     * Test Steps: 1. Create a test category
     *             2. Delete the category
     *             3. Try to fetch the deleted category
     *             4. Check if response status is 404
     * Test Data: ['name' => 'Soon to be deleted']
     * Expected Result: Response status should be 404
     * Actual Result: Response status is 404
     * Status: Passed
     * Remark: None
     */
    public function test_deleted_category_cannot_be_found()
    {
        $category = Category::create(['name' => 'Soon to be deleted']);
        $this->deleteJson("/api/category/{$category->id}");
        $response = $this->getJson("/api/category/{$category->id}");
        $response->assertStatus(404);
    }
}