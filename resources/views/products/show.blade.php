<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>
<style>
/* Your existing styling */
.product-page {
    max-width: 1200px;
    margin: auto;
    padding: 20px;
    color: #333;
}
.product-title {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 30px;
    text-align: left;
}
.product-container {
    display: flex;
    gap: 40px;
    align-items: flex-start;
}
.product-images {
    flex: 1;
    text-align: center;
}
.product-images img {
    height: 450px;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4);
}
.product-details {
    flex: 1;
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}
.product-table {
    width: 100%;
    margin-bottom: 20px;
    border-collapse: separate;
    border-spacing: 0 10px;
}
.product-table th {
    width: 150px;
    font-weight: 600;
    text-align: left;
    color: #333;
    padding-right: 10px;
}
.product-table td {
    text-align: left;
    color: #555;
}
.add-to-quote, .whatsapp-contact {
    width: 100%;
    padding: 12px 20px;
    font-size: 16px;
    font-weight: bold;
    border-radius: 8px;
    text-align: center;
    margin-bottom: 10px;
    border: none;
    transition: background-color 0.3s ease;
}
.add-to-quote {
    background-color: #2DCCEC;
    color: #fff;
}
.whatsapp-contact {
    background-color: #2DCCEC;
    color: #fff;
}
.add-to-quote:hover {
    background-color: white;
    color: #2DCCEC;
    border: 1px solid #2DCCEC;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}
.whatsapp-contact:hover {
    background-color: white;
    color: #2DCCEC;
    border: 1px solid #2DCCEC;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}
@media (max-width: 991px) {
    .product-container {
        display: block;
        text-align: center;
    }
    .product-images, .product-details {
        margin: 0 auto;
        width: 90%;
    }
    .product-images img {
        height: 450px;
        width: 100%;
    }
    .add-to-quote, .whatsapp-contact {
        width: 100%;
        padding: 10px 15px;
        font-size: 14px;
    }
}
@media (max-width: 767px) {
    .product-title {
        font-size: 20px;
    }
    .product-table th, .product-table td {
        font-size: 14px;
    }

    .product-images img {
        max-width: 100%;
        height: 450px;
    }

    .add-to-quote, .whatsapp-contact {
        font-size: 14px;
        padding: 10px;
    }
}
</style>
<body>
    <!-- Include Navbar -->
    @include('layouts.navbar')
<br><br><br><br>
    <div class="container product-page">
        <div class="row product-container">
            <!-- Left Side: Product Image -->
            <div class="col-md-6 col-12 product-images">
                @foreach($images as $image)
                    <img src="{{ asset('storage/' . $image) }}" class="img-fluid mb-3 product-image" alt="{{ $product->name }}">
                @endforeach
            </div>
            <!-- Right Side: Product Details -->
            <div class="col-md-6 col-12 product-details">
                <h1 class="product-title">{{ $product->name }}</h1>
                <table class="table product-table">
                    <tbody>
                        <tr>
                            <th>Description</th>
                            <td>{{ $product->description }}</td>
                        </tr>
                        <tr>
                            <th>Item</th>
                            <td>{{ $product->item }}</td>
                        </tr>
                        <tr>
                            <th>Material</th>
                            <td>{{ $product->material }}</td>
                        </tr>
                        <tr>
                            <th>Size Printing</th>
                            <td>{{ $product->sizePrinting }}</td>
                        </tr>
                        <tr>
                            <th>Design</th>
                            <td>{{ $product->Design }}</td>
                        </tr>
                        <tr>
                            <th>Logo</th>
                            <td>{{ $product->Logo }}</td>
                        </tr>
                        <tr>
                            <th>Branding</th>
                            <td>{{ $product->Branding }}</td>
                        </tr>
                    </tbody>
                </table>
                <!-- Add to Quote Button -->
                <form id="add-to-quote-form" action="{{ route('add.to.quote', $product->id) }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <button class="btn btn-danger add-to-quote" onclick="event.preventDefault(); document.getElementById('add-to-quote-form').submit();">
                    ADD TO QUOTE
                </button>

                <!-- WhatsApp Contact -->
                <a href="https://wa.me/923008119361" class="btn btn-success whatsapp-contact">WHATSAPP</a>
            </div>
        </div>
    </div>
<br><br><br><br>
    <!-- Include Footer -->
    @extends('layouts.footer')
     <!-- Bootstrap JS Bundle -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Icons Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.js"></script>
</body>
</html>
