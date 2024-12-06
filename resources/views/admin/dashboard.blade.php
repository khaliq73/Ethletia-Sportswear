<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background and text styling */
        body {
            background-color: #f5faff;
            color: #333;
            margin: 0;
            height: 100vh; /* Make sure the body takes full height of the viewport */
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
        }

        /* Center the content */
        .container {
            max-width: 1200px; /* Limit the width of the container */
            width: 100%; /* Make sure the container takes full width if needed */
            padding: 20px;
        }

        /* Header styling */
        .dashboard-header {
            color: #007bff;
            font-weight: bold;
            margin-bottom: 40px;
        }

        /* Card styling */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            background: #ffffff;
        }

        /* Card hover effect */
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 123, 255, 0.2);
        }

        /* Card header color and button */
        .card-title {
            color: #007bff;
            font-weight: 600;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        /* Card layout */
        .card-body {
            padding: 30px;
        }

        /* Footer */
        .footer {
            text-align: center;
            margin-top: 40px;
            color: #aaa;
        }

        /* Responsive Design for smaller screens */
        @media (max-width: 992px) {
            .row {
                margin: 0 auto; /* Center row on medium screens */
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .col-md-4 {
                width: 80%; /* Make each card occupy 80% of the container width */
                margin-bottom: 20px; /* Space between cards */
            }
        }

        @media (max-width: 576px) {
            /* For extra small devices like mobile phones */
            .col-md-4 {
                width: 100%; /* Full width for small screens */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center dashboard-header">Admin Dashboard</h2>
        
        <div class="row g-4">
            <!-- Product Management Box -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Product Management</h5>
                        <p class="card-text">Manage all your products easily from here.</p>
                        <!-- Link to Admin Product Management Page -->
                        <a href="{{ route('admin.index') }}" class="btn btn-primary">Go to Products</a>
                    </div>
                </div>
            </div>

            <!-- Add to Quote Box -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Add to Quote</h5>
                        <p class="card-text">Easily add products to quotes for customers.</p>
                        <a href="{{ route('admin.quotes.index') }}" class="btn btn-primary">Add to Quote</a>
                    </div>
                </div>
            </div>

            <!-- Contact Us Box -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Contact Us</h5>
                        <p class="card-text">View and manage contact inquiries.</p>
                        <a href="{{ route('admin.contacts.index') }}" class="btn btn-primary">View Contacts</a>

                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="footer mt-5">
            <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
        </div>
    </div>

    <!-- Bootstrap JavaScript (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
