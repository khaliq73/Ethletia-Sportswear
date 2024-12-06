<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create()
    {
        // Return the create view from the admin folder
        return view('admin.create');  // This will load resources/views/admin/create.blade.php
    }
    
    // Display all products in the admin panel with search functionality
    public function index(Request $request)
    {
        $query = Product::query();

        // If a search query exists, filter products based on the input
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('category', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%");
        }

        // Paginate the results (15 per page)
        $products = $query->paginate(15);

        return view('admin.index', compact('products'));
    }

    // Show the edit form for a product
    public function edit($id)
    {
        $product = Product::findOrFail($id); // Find the product by ID
        return view('admin.edit', compact('product')); // Pass the product data to edit view
    }

    // Update a product in the database
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id); // Find the product to update

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'nullable|string',
            'item' => 'nullable|string',
            'material' => 'nullable|string',
            'sizePrinting' => 'nullable|string',
            'Design' => 'nullable|string',
            'Logo' => 'nullable|string',
            'Branding' => 'nullable|string',
            'images' => 'nullable|array', // Ensure images is an array if multiple
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation
        ]);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->item = $request->item;
        $product->material = $request->material;
        $product->sizePrinting = $request->sizePrinting;
        $product->Design = $request->Design;
        $product->Logo = $request->Logo;
        $product->Branding = $request->Branding;

        // Handle image upload
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $image) {
                $images[] = $image->store('products', 'public');
            }
            $product->images = json_encode($images); // Save the images as JSON
        }

        $product->save(); // Save the updated product data

        return redirect()->route('admin.index')->with('success', 'Product updated successfully');
    }

    // Delete a product from the database
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete(); // Delete the product

        return redirect()->route('admin.index')->with('success', 'Product deleted successfully');
    }
}
