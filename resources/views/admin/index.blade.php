@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Header Section with Create Button -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-dark">All Products</h1>
        <a href="{{ route('admin.create') }}" class="btn btn-success btn-lg">+ Create New Product</a>
    </div>

    <!-- Success Message for Flash Session -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Search Bar -->
    <form action="" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search for products..." value="{{ request()->query('search') }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </form>

    <!-- Responsive Product Table with Horizontal Scroll -->
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Item</th>
                    <th>Material</th>
                    <th>Size Printing</th>
                    <th>Design</th>
                    <th>Logo</th>
                    <th>Branding</th>
                    <th>Images</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($products->count() > 0)
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->item }}</td>
                        <td>{{ $product->material }}</td>
                        <td>{{ $product->sizePrinting }}</td>
                        <td>{{ $product->Design }}</td>
                        <td>{{ $product->Logo }}</td>
                        <td>{{ $product->Branding }}</td>
                        <td>
                            @if ($product->images)
                                @foreach (json_decode($product->images) as $image)
                                    <img src="{{ asset('storage/' . $image) }}" alt="Product Image" width="100" height="100" style="object-fit: cover;">
                                @endforeach
                            @endif
                        </td>
                        <td>
                            <!-- Flexbox for responsive button alignment -->
                            <div class="d-flex flex-wrap justify-content-center gap-2">
                                <!-- Update Button -->
                                <a href="{{ route('admin.edit', $product->id) }}" class="btn btn-warning btn-sm mb-2 mb-sm-0">Update</a>

                                <!-- Delete Button -->
                                <form action="{{ route('admin.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mb-2 mb-sm-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="12" class="text-center">No products found.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

    <!-- Pagination (Bootstrap) -->
    <div class="d-flex justify-content-center mt-4">
        <nav>
            <ul class="pagination">
                @if ($products->onFirstPage())
                    <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $products->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                @endif

                @for ($i = 1; $i <= $products->lastPage(); $i++)
                    <li class="page-item {{ ($products->currentPage() == $i) ? 'active' : '' }}">
                        <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor

                @if ($products->hasMorePages())
                    <li class="page-item"><a class="page-link" href="{{ $products->nextPageUrl() }}" rel="next">&raquo;</a></li>
                @else
                    <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
                @endif
            </ul>
        </nav>
    </div>
</div>
@endsection
