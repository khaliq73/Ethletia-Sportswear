<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{

   // In ProductController.php
public function getaQuote($id) {
    // Fetch product details by ID
    $product = Product::findOrFail($id);

    // Add product to session-based quote list
    $quote = session()->get('quote', []);
    $quote[$id] = $product;
    session(['quote' => $quote]);

    
    // Redirect to the 'get-a-quote' page
    return redirect()->route('get-a-quote')->with('success', 'Product added to quote.');
} public function getQuote()
{
    // Retrieve the quote items from the session
    $quoteItems = session('quote', []);

    // Return the 'get-a-quote' view with the quote items
    return view('get-a-quote', compact('quoteItems'));
}

public function addToQuote($id)
{
    // Fetch product details by ID
    $product = Product::findOrFail($id);

    // Add product to session-based quote list
    $quote = session()->get('quote', []);
    $quote[$id] = $product;
    session(['quote' => $quote]);

    // Redirect to the 'get-a-quote' page
    return redirect()->route('get-a-quote')->with('success', 'Product added to quote.');
}


public function removeFromQuote($id)
{
    // Get the current quote from the session
    $quote = session()->get('quote', []);

    // Remove the product from the quote
    if (isset($quote[$id])) {
        unset($quote[$id]);
        session(['quote' => $quote]);
    }

    // Redirect back to the 'get-a-quote' page
    return redirect()->route('get-a-quote')->with('success', 'Product removed from quote.');
}



    // Display the list of products
    public function index()
    {
        // Retrieve all products from the database
        $products = Product::all();

        // Return the index view with the products
        return view('products.index', compact('products'));
    }

    // Show the form to create a new product

    
    // Store a newly created product in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            
            'category' => 'required|string',
            'item' => 'required|string',
            'material' => 'required|string',
            'sizePrinting' => 'required|string',
            'Design' => 'required|string',
            'Logo' => 'required|string',
            'Branding' => 'required|string',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validate each image
        ]);

        // Save product images
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');
                $imagePaths[] = $path;
            }
        }

        // Save product with image paths
        Product::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
           
            'category' => $validatedData['category'],
            'item' => $validatedData['item'],
            'material' => $validatedData['material'],
            'sizePrinting' => $validatedData['sizePrinting'],
            'Design' => $validatedData['Design'],
            'Logo' => $validatedData['Logo'],
            'Branding' => $validatedData['Branding'],
            'images' => json_encode($imagePaths), // Save images as JSON
        ]);

        return redirect()->route('admin.index')->with('success', 'Product created successfully.');
    }

    // Show the details of a specific product
    public function show($id)
    {
        // Retrieve the product by its ID
        $product = Product::findOrFail($id);

        // Decode the JSON image paths
        $images = json_decode($product->images);

        // Return the show view with the product and its images
        return view('products.show', compact('product', 'images'));
    }

    // Fetch products by category
    public function getByCategory($category)
    {
        
        // Retrieve products that match the specified category
        $products = Product::where('category', $category)->paginate(8);

        // Return the category view with the filtered products
        return view('products.category', compact('products', 'category'));
    }
}
