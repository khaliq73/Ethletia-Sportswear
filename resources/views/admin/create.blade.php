@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Product</h1>
    
    <!-- Show validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Product creation form -->
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category" required>
                <!-- <option value="Men" {{ old('category') == 'Men' ? 'selected' : '' }}>Men</option>
                <option value="Women" {{ old('category') == 'Women' ? 'selected' : '' }}>Women</option> -->
                <option value="American football uniforms" {{ old('category') == 'Americanfootballuniforms' ? 'selected' : '' }}>American football  uniforms</option>
                <option value="Baseball Uniforms" {{ old('category') == 'BaseballUniforms' ? 'selected' : '' }}>Baseball Uniforms</option>
                <option value="Basketball Uniforms" {{ old('category') == 'BasketballUniforms' ? 'selected' : '' }}>Basketball Uniforms</option>
                <option value="Soccer Football Uniforms" {{ old('category') == 'SoccerFootballUniforms' ? 'selected' : '' }}>Soccer / Football Uniforms</option>
                <option value="Rugby Uniforms" {{ old('category') == '' ? 'selected' : 'RugbyUniforms' }}>Rugby Uniforms</option>
                <option value="Ice Hockey Uniforms" {{ old('category') == '' ? 'selected' : 'IceHockeyUniforms' }}>Ice Hockey Uniforms</option>
                <option value="Golf Clothing" {{ old('category') == '' ? 'selected' : 'GolfClothing' }}>Golf Clothing</option>
                <option value="Tennis Clothing" {{ old('category') == '' ? 'selected' : 'TennisClothing' }}>Tennis Clothing</option>
                <option value="Cycling Clothing" {{ old('category') == '' ? 'selected' : 'CyclingClothing' }}>Cycling Clothing</option>
                <option value="Cricket Uniforms" {{ old('category') == '' ? 'selected' : 'CricketUniforms' }}>Cricket Uniforms</option>


                <option value="Hoodies" {{ old('category') == '' ? 'selected' : 'Hoodies' }}>Hoodies</option>
                <option value="Jackets" {{ old('category') == '' ? 'selected' : 'Jackets' }}>Jackets</option>
                <option value="Varsity Jackets" {{ old('category') == '' ? 'selected' : 'VarsityJackets' }}>Varsity Jackets</option>
                <option value="Leggings & Tights" {{ old('category') == '' ? 'selected' : 'Leggings&Tights' }}>Leggings & Tights</option>
                <option value="Sweatshirts" {{ old('category') == '' ? 'selected' : 'Sweatshirts' }}>Sweatshirts</option>
                <option value="Pants & Joggers" {{ old('category') == '' ? 'selected' : 'Pants&Joggers' }}>Pants & Joggers</option>
                <option value="Tops, T-Shirts & Rash Guards" {{ old('category') == '' ? 'selected' : 'Tops,T-Shirts&RashGuards' }}>Tops, T-Shirts & Rash Guards</option>
                <option value="Tank Tops" {{ old('category') == '' ? 'selected' : 'TankTops' }}>Tank Tops</option>
                <option value="Shorts" {{ old('category') == '' ? 'selected' : 'Shorts' }}>Shorts</option>
                <option value="Sports Bras" {{ old('category') == '' ? 'selected' : 'SportsBras' }}>Sports Bras</option>


                <!-- Add other categories as needed -->
            </select>
        </div>

        <div class="form-group">
            <label for="item">Item</label>
            <input type="text" class="form-control" id="item" name="item" value="{{ old('item') }}" required>
        </div>

        <div class="form-group">
            <label for="material">Material</label>
            <input type="text" class="form-control" id="material" name="material" value="{{ old('material') }}" required>
        </div>

        <div class="form-group">
            <label for="sizePrinting">Size Printing</label>
            <input type="text" class="form-control" id="sizePrinting" name="sizePrinting" value="{{ old('sizePrinting') }}" required>
        </div>

        <div class="form-group">
            <label for="Design">Design</label>
            <input type="text" class="form-control" id="Design" name="Design" value="{{ old('Design') }}" required>
        </div>

        <div class="form-group">
            <label for="Logo">Logo</label>
            <input type="text" class="form-control" id="Logo" name="Logo" value="{{ old('Logo') }}" required>
        </div>

        <div class="form-group">
            <label for="Branding">Branding</label>
            <input type="text" class="form-control" id="Branding" name="Branding" value="{{ old('Branding') }}" required>
        </div>

        <div class="form-group">
            <label for="images">Upload Images (multiple allowed)</label>
            <input type="file" class="form-control-file" id="images" name="images[]" multiple required>
        </div>

        
        <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
</div>
@endsection
