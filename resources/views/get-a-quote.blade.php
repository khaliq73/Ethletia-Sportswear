<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Request a Quote</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
  <style>
    .quote-form {
      width: 95%;
      max-width: 1200px;
      margin: 50px auto;
      background-color: white;
      padding: 30px;
      border-radius: 10px;
    }
    .quote-form h2 {
      font-weight: bold;
      color: #000;
      text-align: center;
      margin-bottom: 30px;
      font-size: 2rem;
    }
    .quote-form .product-section {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }
    .product-section .product-card {
      flex: 1 1 calc(33.33% - 20px);
      max-width: 320px;
      margin-bottom: 20px;
    }
    .btn-remove {
      background-color: #d9534f;
      color: white;
      border: none;
      margin-top: -9px;
      padding: 6px 15px;
      font-size: 0.9rem;
    }
    .btn-remove:hover {
      background-color: #c9302c;
    }

    .bttnn{
      background-color: #2DCCEC;
      color: white;
      border: none;
      padding:10px;
      border-radius: 5px;
    }
    .bttnn:hover{
      background-color: white;
      color: #2DCCEC;
      border: 1px solid #2DCCEC;
    }
    /* Responsive styling for smaller screens */
    @media (max-width: 992px) {
      .quote-form {
        padding: 20px;
      }
      .product-section .product-card {
        flex: 1 1 calc(50% - 20px);
      }
    }

    @media (max-width: 576px) {
      .product-section .product-card {
        flex: 1 1 100%;
      }
    }
  </style>
</head>
<body>
  @include('layouts.navbar')

  <div class="container">
    <div class="quote-form">
      <h2>Request a Quote</h2>

      <div class="row">
        <!-- Product Section: Display added products -->
        <div class="col-md-6 product-section">
          @forelse (session('quote', []) as $id => $quoteProduct)
            @php
              $images = isset($quoteProduct['images']) ? json_decode($quoteProduct['images'], true) : [];
              $image = !empty($images) ? $images[0] : null; // Get the first image or fallback to null
            @endphp

            <div class="product-card">
              <div class="card">
                @if ($image)
                  <img src="{{ asset('storage/' . $image) }}" class="card-img-top" alt="{{ $quoteProduct['name'] ?? 'Product Image' }}">
                @else
                  <img src="{{ asset('placeholder.png') }}" class="card-img-top" alt="Placeholder Image">
                @endif
                <div class="card-body">
                  <h5 class="card-title">{{ $quoteProduct['name'] ?? 'Unknown Product' }}</h5>
                  <a href="{{ route('products.show', $id) }}" class="btn btn-primary btn-sm mb-2">View Product</a>

                  <!-- Remove button -->
                  <form action="{{ route('remove.from.quote', $id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-remove">Remove</button>
                  </form>
                </div>
              </div>
            </div>
          @empty
            <p>No products added to the quote yet.</p>
          @endforelse
        </div>

        <!-- Form Section: Request a Quote Form -->
        <div class="col-md-6">
          <form action="{{ route('get-a-quote.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="firstName" class="form-label">First Name *</label>
                <input type="text" class="form-control" name="first_name" id="firstName" required>
              </div>
              <div class="col-md-6">
                <label for="lastName" class="form-label">Last Name *</label>
                <input type="text" class="form-control" name="last_name" id="lastName" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email *</label>
              <input type="email" class="form-control" name="email" id="email" required>
            </div>

            <div class="row mb-3">
              <div class="col-md-6">
                <label for="contactNumber" class="form-label">Contact Number *</label>
                <input type="text" class="form-control" name="contact_number" id="contactNumber" required>
              </div>
              <div class="col-md-6">
                <label for="country" class="form-label">Country *</label>
                <select class="form-select" name="country" id="country" required>
                  <option value="Pakistan">Pakistan</option>
                  <!-- Add more country options here -->
                </select>
              </div>
            </div>

            <div class="mb-3">
              <label for="message" class="form-label">Message *</label>
              <textarea class="form-control" name="message" id="message" rows="4" required></textarea>
            </div>

            <div class="mb-3">
              <label for="orderQuantity" class="form-label">Order Quantity *</label>
              <input type="number" class="form-control" name="order_quantity" id="orderQuantity" required>
            </div>

            <div class="mb-3">
              <label for="fileUpload" class="form-label">Choose File</label>
              <input class="form-control" type="file" name="file" id="fileUpload">
            </div>

            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" name="captcha" id="captcha" required>
              <label class="form-check-label" for="captcha">I'm not a robot</label>
            </div>

            <div class="form-footer">
              <button type="submit" class="bttnn btn-danger">Send Your Request</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  @include('layouts.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
