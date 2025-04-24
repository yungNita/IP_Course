<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Product;
use App\Models\Category;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test ID: Product-001
     * Description: Check if we can access the get all products API
     * Precondition: None
     * Test Steps: 1. Hit the get all products API endpoint
     *             2. Check if the response status is 200
     * Test Data: None
     * Expected Result: The response status should be 200
     * Actual Result: The response status is 200
     * Status: Passed
     * Remark: None
     */
    public function test_get_all_products_api()
    {
        $response = $this->getJson('/api/product');
        $response->assertStatus(200)
                 ->assertJson([]);
    }

    /**
     * Test ID: Product-002
     * Description: Check if empty products returns empty array
     * Precondition: Database has no products
     * Test Steps: 1. Ensure products table is empty
     *             2. Hit the get all products API endpoint
     *             3. Check if response contains empty array
     * Test Data: None
     * Expected Result: Response should contain exact empty array
     * Actual Result: Response contains exact empty array
     * Status: Passed
     * Remark: None
     */
    public function test_empty_products_returns_empty_array()
    {
        $response = $this->getJson('/api/product');
        $response->assertStatus(200)
                 ->assertExactJson([]);
    }

    /**
     * Test ID: Product-003
     * Description: Check if created product appears in response
     * Precondition: None
     * Test Steps: 1. Create a test category
     *             2. Create a test product
     *             3. Hit the get all products API endpoint
     *             4. Check if response contains the created product
     * Test Data: ['name' => 'Test Product', 'category_id' => 1, 'pricing' => 99.99]
     * Expected Result: Response should contain the created product data
     * Actual Result: Response contains the created product data
     * Status: Passed
     * Remark: None
     */
    public function test_created_product_appears_in_response()
    {
        $category = Category::create(['name' => 'Test Category']);
        
        $product = Product::create([
            'name' => 'Test Product',
            'category_id' => $category->id,
            'pricing' => 99.99,
            'description' => 'Test description'
        ]);

        $response = $this->getJson('/api/product');
        
        $response->assertStatus(200)
                 ->assertJsonFragment([
                     'name' => 'Test Product',
                     'pricing' => 99.99
                 ]);
    }

    /**
     * Test ID: Product-004
     * Description: Check if we can create a new product
     * Precondition: A category exists
     * Test Steps: 1. Create a test category
     *             2. Send POST request to create product endpoint
     *             3. Check if response status is 201
     * Test Data: ['name' => 'New Product', 'category_id' => 1, 'pricing' => 199.99]
     * Expected Result: Response status should be 201 (created) with product data
     * Actual Result: Response status is 201 with product data
     * Status: Passed
     * Remark: None
     */
    public function test_product_creation()
    {
        $category = Category::create(['name' => 'Test Category']);
        
        $response = $this->postJson('/api/product', [
            'name' => 'New Product',
            'category_id' => $category->id,
            'pricing' => 199.99,
            'description' => 'Test description'
        ]);

        $response->assertStatus(201)
                 ->assertJson([
                     'message' => 'Product created successfully',
                     'product' => [
                         'name' => 'New Product',
                         'pricing' => '199.99'
                     ]
                 ]);
    }

    /**
     * Test ID: Product-005
     * Description: Check if validation works for missing required fields
     * Precondition: None
     * Test Steps: 1. Send POST request without required fields
     *             2. Check if response status is 422
     * Test Data: ['pricing' => 99.99] (missing name and category_id)
     * Expected Result: Response status should be 422 (unprocessable entity)
     * Actual Result: Response status is 422 with validation errors
     * Status: Passed
     * Remark: None
     */
    public function test_validation_for_missing_required_fields()
    {
        $response = $this->postJson('/api/product', [
            'pricing' => 99.99
        ]);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors(['name', 'category_id']);
    }

    /**
     * Test ID: Product-006
     * Description: Check if we can retrieve a single product
     * Precondition: A product exists
     * Test Steps: 1. Create a test category
     *             2. Create a test product
     *             3. Hit the get product endpoint with its ID
     *             4. Check if response contains the product
     * Test Data: ['name' => 'Test Product', 'category_id' => 1, 'pricing' => 99.99]
     * Expected Result: Response should contain the requested product
     * Actual Result: Response contains the requested product
     * Status: Passed
     * Remark: None
     */
    public function test_get_single_product()
    {
        $category = Category::create(['name' => 'Test Category']);
        
        $product = Product::create([
            'name' => 'Test Product',
            'category_id' => $category->id,
            'pricing' => 99.99
        ]);

        $response = $this->getJson("/api/product/{$product->id}");
        
        $response->assertStatus(200)
                 ->assertJson([
                     'id' => $product->id,
                     'name' => 'Test Product'
                 ]);
    }

    /**
     * Test ID: Product-007
     * Description: Check if we can update a product
     * Precondition: A product exists
     * Test Steps: 1. Create a test category
     *             2. Create a test product
     *             3. Send PATCH request to update the product
     *             4. Check if response contains updated data
     * Test Data: ['name' => 'Updated Product', 'pricing' => 299.99]
     * Expected Result: Response should contain the updated product data
     * Actual Result: Response contains the updated product data
     * Status: Passed
     * Remark: None
     */
    public function test_product_update()
    {
        $category = Category::create(['name' => 'Test Category']);
        
        $product = Product::create([
            'name' => 'Original Product',
            'category_id' => $category->id,
            'pricing' => 99.99
        ]);

        $response = $this->patchJson("/api/product/{$product->id}", [
            'name' => 'Updated Product',
            'pricing' => 299.99
        ]);

        $response->assertStatus(200)
                 ->assertJson([
                     'message' => 'Product updated successfully',
                     'product' => [
                         'name' => 'Updated Product',
                         'pricing' => '299.99'
                     ]
                 ]);
    }

    /**
     * Test ID: Product-008
     * Description: Check if we can delete a product
     * Precondition: A product exists
     * Test Steps: 1. Create a test category
     *             2. Create a test product
     *             3. Send DELETE request to delete the product
     *             4. Check if response status is 200
     *             5. Verify product is removed from database
     * Test Data: None
     * Expected Result: Response status should be 200 and product should be deleted
     * Actual Result: Response status is 200 and product is deleted
     * Status: Passed
     * Remark: None
     */
    public function test_product_deletion()
    {
        $category = Category::create(['name' => 'Test Category']);
        
        $product = Product::create([
            'name' => 'Product to Delete',
            'category_id' => $category->id,
            'pricing' => 99.99
        ]);

        $response = $this->deleteJson("/api/product/{$product->id}");
        
        $response->assertStatus(200)
                 ->assertJson(['message' => 'Product deleted successfully']);

        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }
}