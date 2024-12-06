<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>
<style>
    .btn {
        font-size: 13px;
    }

    /* Main container styling */
    .container {
        margin-top: 20px;
        padding-left: 0;
        padding-right: 0;
    }

    /* Sidebar styling */
    .catalog-container {
        margin-bottom: 20px;
        padding-left: 0;
        padding-right: 0;
    }

    /* Product Grid Styling */
    .row {
        margin-left: 0;
        margin-right: 0;
    }

    .col-md-3 {
        padding-left: 5px;
        padding-right: 5px;
    }

    .section {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        margin-left: 0;
        margin-right: 0;
    }

    h2 {
        background-color: #2DCCEC;
        color: white;
        padding: 10px;
        text-align: center;
        font-size: 18px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .frm a {
        text-decoration: none;
        color: #666;
    }

    .frm a:hover {
        color: #2DCCEC;
    }

    .frm ul {
        list-style: none;
        padding-left: 20px;
    }

    .frm li {
        margin-bottom: 10px;
    }

    /* Product Card Styling */
    .card {
        border: none;
        transition: transform 0.3s ease;
        text-align: center;
        margin-bottom: 20px;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card-img-top {
        height: 220px;
        border-bottom: 1px solid #f0f0f0;
    }

    .card-body {
        padding: 15px;
    }

    .card-title {
        font-size: 1rem;
        margin-bottom: 10px;
    }

    .btn-primary {
        text-transform: uppercase;
        font-weight: bold;
    }

    /* Search Filter Functionality */
    #categorySearch {
        padding: 8px;
        margin-bottom: 10px;
        width: 100%;
    }

    @media (max-width: 768px) {
        .catalog-container {
            margin-bottom: 40px;
        }
    }

    @media (max-width: 576px) {
        .card-img-top {
            height: 180px;
        }

        .section {
            width: 100%;
        }
    }

    @media (max-width: 991px) {
        .section h2 {
            font-size: 14px;
        }

        .frm li {
            font-size: 14px;
        }
    }

    /* Media Query for Screens Below 1200px */
    @media (max-width: 1200px) {
        .btn-primary {
            font-size: 12px;
            padding: 8px 16px;
        }
    }
</style>
<body>
    @include('layouts.navbar') {{-- Include the navbar --}}
    <br><br><br>
    <div class="container">
        @if(isset($message))
            <p>{{ $message }}</p>
        @else
        <div class="row">
            <!-- Catalog Section on the Left -->
            <div class="col-md-3">
                <div class="catalog-container">
                    <!-- Catalog Section -->
                    <div class="section sect">
                        <h2>Catalogs</h2>
                        <form class="frm">
                            <ul>
                                <a href="/SportswearCatalog">
                                    <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;"></i>Sportswear Catalog</li>
                                </a>
                                <a href="/ActivewearCatalog">
                                    <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;"></i>Activewear Catalog</li>
                                </a>
                                <a href="/Casual-wear">
                                    <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;"></i>Casual wear Catalog</li>
                                </a>
                                <a href="/Gloves">
                                    <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;"></i>Gloves Catalog</li>
                                </a>
                                <a href="/Accessories">
                                    <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;"></i>Accessories Catalog</li>
                                </a>
                            </ul>
                        </form>
                    </div>
                    <!-- Other Categories Section -->
                    <div class="section sect">
                        <h2>Other Categories</h2>
                        <form class="frm">
                            <ul>
                                <a href="/Sportswear">
                                    <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;"></i>Sportwear</li>
                                </a>
                                <a href="/Activewear">
                                    <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;"></i>Activewear</li>
                                </a>
                                <a href="/Casual-wear">
                                    <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;"></i>Casual wear</li>
                                </a>
                                <a href="/Gloves">
                                    <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;"></i>Gloves</li>
                                </a>
                                <a href="/Accessories">
                                    <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;"></i>Accessories</li>
                                </a>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Product Grid on the Right -->
            <div class="col-md-9">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-3">
                            <div class="card mb-4">
                                <img src="{{ asset('storage/' . json_decode($product->images)[0]) }}" class="card-img-top" alt="{{ $product->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Product</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination Section -->
                <div class="d-flex justify-content-center">
                    {{ $products->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
        @endif
    </div>
    <br><br><br>
    @include('layouts.footer') {{-- Include the footer --}}
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Icons Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.js"></script>
</body>
</html>
