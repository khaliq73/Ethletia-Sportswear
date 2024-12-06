@extends('layouts.app')

@section('content')
<h1>Quote Details</h1>

<table class="table table-striped">
    <tr>
        <th>Field</th>
        <th>Value</th>
    </tr>
    <tr>
        <td><strong>First Name</strong></td>
        <td>{{ $quote->first_name }}</td>
    </tr>
    <tr>
        <td><strong>Last Name</strong></td>
        <td>{{ $quote->last_name }}</td>
    </tr>
    <tr>
        <td><strong>Email</strong></td>
        <td>{{ $quote->email }}</td>
    </tr>
    <tr>
        <td><strong>Contact Number</strong></td>
        <td>{{ $quote->contact_number }}</td>
    </tr>
    <tr>
        <td><strong>Country</strong></td>
        <td>{{ $quote->country }}</td>
    </tr>
    <tr>
        <td><strong>Order Quantity</strong></td>
        <td>{{ $quote->order_quantity }}</td>
    </tr>
    <tr>
        <td><strong>Message</strong></td>
        <td>{{ $quote->message }}</td>
    </tr>
    <tr>
        <td><strong>Attached File</strong></td>
        <td>
            @if($quote->file)
            <a href="{{ Storage::url($quote->file) }}" target="_blank">View File</a>
            @else
            No file uploaded.
            @endif
        </td>
    </tr>
    <tr>
        <td><strong>Products</strong></td>
        <td>
            @if($quote->products && is_array($quote->products))
            <ul>
                @foreach($quote->products as $product)
                <li>
                    <!-- Check if image exists, then display it -->
                    @if(!empty($product['images']))
                        <strong>Image: </strong>
                        <img src="{{ asset('storage/' . json_decode($product['images'])[0]) }}" alt="{{ $product['name'] }}" width="70" />
                    @else
                        <span>No image available</span>
                    @endif
                    <br>
                    <strong>Product Name: </strong> {{ $product['name'] ?? 'Unknown Product' }} <br>
                    <strong>Product ID: </strong> {{ $product['id'] }} <br>
                </li>
                @endforeach
            </ul>
            @else
            No products associated.
            @endif
        </td>
    </tr>
</table>

<a href="{{ route('admin.quotes.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
