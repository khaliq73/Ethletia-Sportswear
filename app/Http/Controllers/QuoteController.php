<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QuoteController extends Controller
{
    /**
     * Display a listing of quotes.
     */
    public function index()
    {
        $quotes = Quote::all();
        return view('admin.quotes.index', compact('quotes'));
    }

    /**
     * Show the form for creating a new quote.
     */
    public function create()
    {
        return view('admin.quotes.create');
    }

    /**
     * Store a newly created quote in the database.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'contact_number' => 'required|string|max:15',
            'country' => 'required|string|max:255',
            'order_quantity' => 'required|integer',
            'message' => 'nullable|string',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'products' => 'nullable|array', // This will hold the product IDs
        ]);

        // Handle file upload
        if ($request->hasFile('file')) {
            $validatedData['file'] = $request->file('file')->store('quotes', 'public');
        }

        // Add the products from session to the quote data
        $validatedData['products'] = session('quote', []);

        // Create the quote in the database
        Quote::create($validatedData);

        // Clear the session after saving
        session()->forget('quote');

        return redirect()->route('get-a-quote')->with('success', 'Quote created successfully.');
    }

    /**
     * Display the specified quote.
     */
    public function show($id)
    {
        $quote = Quote::findOrFail($id);
        return view('admin.quotes.show', compact('quote'));
    }

    /**
     * Show the form for editing the specified quote.
     */
    public function edit($id)
    {
        $quote = Quote::findOrFail($id);
        return view('admin.quotes.edit', compact('quote'));
    }

    /**
     * Update the specified quote in the database.
     */
    public function update(Request $request, $id)
    {
        $quote = Quote::findOrFail($id);

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'contact_number' => 'required|string|max:15',
            'country' => 'required|string|max:255',
            'order_quantity' => 'required|integer',
            'message' => 'nullable|string',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'products' => 'nullable|array', // This will hold the product IDs
        ]);

        // Handle file update
        if ($request->hasFile('file')) {
            if ($quote->file) {
                Storage::disk('public')->delete($quote->file);
            }
            $validatedData['file'] = $request->file('file')->store('quotes', 'public');
        }

        // Update the quote in the database
        $quote->update($validatedData);

        return redirect()->route('admin.quotes.index')->with('success', 'Quote updated successfully.');
    }

    /**
     * Remove the specified quote from the database.
     */
    public function destroy($id)
    {
        $quote = Quote::findOrFail($id);

        // Delete the associated file if it exists
        if ($quote->file) {
            Storage::disk('public')->delete($quote->file);
        }

        $quote->delete();

        return redirect()->route('admin.quotes.index')->with('success', 'Quote deleted successfully.');
    }

    /**
     * Add a product to the quote (session-based).
     */
    public function addToQuote($productId)
    {
        $product = Product::findOrFail($productId); // Find the product
        $quoteProducts = session()->get('quote', []);

        // Add product to session if not already in the quote
        if (!isset($quoteProducts[$productId])) {
            $quoteProducts[$productId] = [
                'id' => $product->id,
                'name' => $product->name,
                'images' => $product->images, // Store product images
            ];
        }

        session(['quote' => $quoteProducts]); // Save back to session

        return redirect()->route('get-a-quote.index')->with('success', 'Product added to quote.');
    }

    /**
     * Remove a product from the quote (session-based).
     */
    public function removeFromQuote($productId)
    {
        $quoteProducts = session()->get('quote', []);

        // Remove the product from the session if it exists
        if (isset($quoteProducts[$productId])) {
            unset($quoteProducts[$productId]);
        }

        session(['quote' => $quoteProducts]);

        return redirect()->route('get-a-quote.index')->with('success', 'Product removed from quote.');
    }
}
