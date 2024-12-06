@extends('layouts.app')


@section('content')
<div class="container mt-4">
    <h1>Quotes</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>_id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Country</th>
                <th>Order Quantity</th>
                <th>Message</th>
                <th>File</th>
                <th>Products</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quotes as $quote)
                <tr>
                    <td>{{ $quote->id }}</td>
                    <td>{{ $quote->first_name }}</td>
                    <td>{{ $quote->last_name }}</td>
                    <td>{{ $quote->email }}</td>
                    <td>{{ $quote->contact_number }}</td>
                    <td>{{ $quote->country }}</td>
                    <td>{{ $quote->order_quantity }}</td>
                    <td>{{ $quote->message }}</td>
                    <td>
                        @if($quote->file)
                            <a href="{{ asset('storage/' . $quote->file) }}" target="_blank">View File</a>
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        @if($quote->products && is_array($quote->products))
                            <ul>
                                @foreach($quote->products as $product)
                                    <li>
                                        <!-- Check if images are available and display the first one -->
                                        @if(!empty($product['images']))
                                            <strong>Image: </strong>
                                            <img src="{{ asset('storage/' . json_decode($product['images'])[0]) }}" alt="{{ $product['name'] }}" width="70" border="1px solid black" />
                                        @else
                                            <span>No image available</span>
                                        @endif
                                        <br>
                                        <strong>Product Name: </strong> {{ $product['name'] }} <br>
                                        <strong>Product ID: </strong> {{ $product['id'] }} <br>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        <!-- Style buttons to appear in a single row with equal widths -->
                        <div class="btn-group" role="group" aria-label="Actions" style="display: flex; justify-content: space-between;">
                            <a href="{{ route('admin.quotes.show', $quote->id) }}" class="btn btn-info btn-sm" style="flex: 1; margin-right: 5px;">Show</a>
                            <a href="{{ route('admin.quotes.edit', $quote->id) }}" class="btn btn-primary btn-sm" style="flex: 1; margin-right: 5px;">Edit</a>
                            <form action="{{ route('admin.quotes.destroy', $quote->id) }}" method="POST" style="display: inline-block; flex: 1;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this quote?')" style="width: 100%;">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
