<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json(Category::orderBy('name')->get());
    }

    public function show($id)
    {
        return response()->json(Category::findOrFail($id));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(['name' => 'required|unique:categories']);
        $category = Category::create($validated);
        return response()->json($category, Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $validated = $request->validate(['name' => 'required|unique:categories,name,' . $id]);
        $category->update($validated);
        return response()->json($category);
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

    public function findByName($name)
    {
        $category = Category::findByName($name);
        return response()->json($category ?? ['message' => 'Category not found'], $category ? 200 : 404);
    }
}