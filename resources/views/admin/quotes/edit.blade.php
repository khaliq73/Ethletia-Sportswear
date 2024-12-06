<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Quote</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@include('layouts.app')
<div class="container">
    <h2>Edit Quote</h2>

    <form action="{{ route('admin.quotes.update', $quote->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Ensure this specifies PUT for the update -->


        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" name="first_name" value="{{ $quote->first_name }}" required>
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="last_name" value="{{ $quote->last_name }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $quote->email }}" required>
        </div>

        <div class="mb-3">
            <label for="contactNumber" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contactNumber" name="contact_number" value="{{ $quote->contact_number }}" required>
        </div>

        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" name="country" value="{{ $quote->country }}" required>
        </div>

        <div class="mb-3">
            <label for="orderQuantity" class="form-label">Order Quantity</label>
            <input type="number" class="form-control" id="orderQuantity" name="order_quantity" value="{{ $quote->order_quantity }}" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message">{{ $quote->message }}</textarea>
        </div>

        <div class="mb-3">
            <label for="fileUpload" class="form-label">Upload File</label>
            <input class="form-control" type="file" id="fileUpload" name="file">
            @if($quote->file)
                <p>Current file: <a href="{{ asset('storage/' . $quote->file) }}" target="_blank">View File</a></p>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update Quote</button>
    </form>
</div>
<br> <br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
