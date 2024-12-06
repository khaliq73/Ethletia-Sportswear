@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Product</h1>

    <form action="{{ route('admin.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control">{{ $product->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category" id="category" class="form-control" value="{{ $product->category }}">
        </div>

        <div class="form-group">
            <label for="item">Item</label>
            <input type="text" name="item" id="item" class="form-control" value="{{ $product->item }}">
        </div>

        <div class="form-group">
            <label for="material">Material</label>
            <input type="text" name="material" id="material" class="form-control" value="{{ $product->material }}">
        </div>

        <div class="form-group">
            <label for="sizePrinting">Size Printing</label>
            <input type="text" name="sizePrinting" id="sizePrinting" class="form-control" value="{{ $product->sizePrinting }}">
        </div>

        <div class="form-group">
            <label for="Design">Design</label>
            <input type="text" name="Design" id="Design" class="form-control" value="{{ $product->Design }}">
        </div>

        <div class="form-group">
            <label for="Logo">Logo</label>
            <input type="text" name="Logo" id="Logo" class="form-control" value="{{ $product->Logo }}">
        </div>

        <div class="form-group">
            <label for="Branding">Branding</label>
            <input type="text" name="Branding" id="Branding" class="form-control" value="{{ $product->Branding }}">
        </div>

        <div class="form-group">
            <label for="images">Product Images</label>
            <input type="file" name="images[]" id="images" class="form-control" multiple>
            <div>
                @if ($product->images)
                    @foreach (json_decode($product->images) as $image)
                        <img src="{{ asset('storage/' . $image) }}" alt="Product Image" width="100">
                    @endforeach
                @endif
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</div>
@endsection
