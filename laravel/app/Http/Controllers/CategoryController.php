<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
//-- Get/api/categories
    public function getCategories() 
    
    {
        return Category::all();
    }
// --post /api/categories
    public function createCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $category = Category::create([
            'name' => $request->name,            
        ]);
        $category->save();
        return $category;
    }
    
    public function getCategory($categoryId) {
        return response()->json(Category::findOrFail($categoryId));
    }

    public function updateCategory(Request $request, $categoryId){
        $category = Category::findOrFail($categoryId);
        $request->validate([
            'name' => 'sometimes|string|max:255'
        ]);

        $category->name = $request->name;
        $category->save();
        return $category;
    }

    public function deleteCategory(Request $request, $categoryId){
        $category = Category::findOrFail($categoryId);
        $category->delete();
        return response()->json(['message' => 'Category deleted successfully']);
    }
}