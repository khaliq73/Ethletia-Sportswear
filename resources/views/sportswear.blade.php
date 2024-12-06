<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportswear</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>
<style>
     

        .bbooxx {
      position: relative;
      width: 100%;
      height: 350px;
    }

    .bbooxx img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5); /* Dark overlay */
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .overlay h1 {
      color: white;
      font-size: 3.5rem;
      text-align: center;
    }
    

    .custom-section {
        margin-top: 50px;
            padding: 50px 0;
        }
        .custom-heading {
            font-size: 1.5rem;
            font-weight: bold;
            color: #0d1b2a;
        }
        .custom-text {
            font-size: 1.1rem;
            color: #5a5a5a;
        }
        /* Styling the vertical line */
        .divider {
            border-left: 2px solid #0d1b2a;
            height: 100px; /* Set a fixed height */
            margin: 0 auto; /* Center the divider */
        }
        /* Responsive stacking for mobile screens */
        @media (max-width: 767.98px) {
            .divider {
                display: none; /* Hide divider on mobile */
            }
            .left-box, .right-box {
                text-align: center; /* Center content for mobile */
         
            }
            
        }
        a {
    text-decoration: none; /* Removes underline from all links */
  /* Inherits the color from the surrounding text */
}

    .uniform-box {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            align-items: center;
            flex-direction: row;
            max-width: 90%;
            margin-left: 5%;
            text-decoration: none;
            
        }
        .uniform-box:hover {
    transform: translateY(-5px); /* Move the box up slightly */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Add a deeper shadow */
}

        .uniform-image-wrapper {
            width: 160px;  /* Set fixed width */
            height: 160px; /* Set fixed height */
            background-color: #e0e0e0;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 20px;
            flex-shrink: 0;
            
        }
        .uniform-image-wrapper img {
            width: 120px;   /* Ensure image fills the wrapper */
            height: 120px;  /* Ensure image fills the wrapper */
            object-fit: cover; /* Ensure image covers the area without stretching */
            border-radius: 50%; /* Maintain circular shape */
        }
        .uniform-text {
            flex: 1;
        }
        .uniform-text h5 {
            font-weight: bold;
            color: #333;
        }
        .uniform-text p {
            font-size: 14px;
            color: #555;
            margin-bottom: 15px;
        }
        /* Media query for medium screens (below 1000px) */
        @media (max-width: 1000px) {
            .uniform-box {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .uniform-image-wrapper {
                width: 140px; /* Adjust width */
                height: 140px; /* Adjust height */
                margin-bottom: 15px;
            }

            .uniform-text {
                width: 100%;
            }

            .uniform-text h5 {
                font-size: 18px;
            }

            .uniform-text p {
                font-size: 14px;
            }
        }

        /* Media query for mobile screens (below 576px) */
        @media (max-width: 576px) {
            .uniform-box {
                flex-direction: column;
                align-items: center;
            }

            .uniform-image-wrapper {
                width: 120px; /* Adjust width */
                height: 120px; /* Adjust height */
                margin-bottom: 10px;
            }

            .uniform-text {
                width: 100%;
                text-align: center;
            }

            .uniform-text h5 {
                font-size: 16px;
            }

            .uniform-text p {
                font-size: 13px;
            }
        }



</style>
<body>
@include('layouts.navbar') 
    <div class="bbooxx">
        <img src="images/Janletic-Sports-wear-manufacturer-Pakistan.jpg" class="img-fluid" alt="...">
        <div class="overlay">
          <h1>
            Sportswear & Team Uniforms Manufacturer</h1>
        </div>
      </div>
      <section class="custom-section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <!-- Left box with heading -->
                <div class="col-md-5 text-md-end left-box">
                    <h1 class="custom-heading">
                        Private Label Sportswear & Team Uniform Manufacturer and Exporter</h1>
                </div>
                <!-- Middle divider (vertical line) -->
                <div class="col-md-1 text-center d-flex justify-content-center">
                    <div class="divider"></div>
                </div>
                <!-- Right box with description -->
                <div class="col-md-5 text-md-start right-box">
                    <p class="custom-text">  As a leading manufacturer, exporter, and distributor of customizable sportswear based in Sialkot, Pakistan, we pride ourselves on delivering high-quality custom sports apparel and team uniforms. Our extensive range includes jerseys, pants, and shorts tailored for men, women, and youth, all offered at competitive prices.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <!-- Uniform Box 1 -->
            <div class="col-md-6">
                <a href="{{ route('products.category', 'American football uniforms') }}">
                    <div class="uniform-box">
                        <div class="uniform-image-wrapper">
                            <img src="images/sport1.png" alt="American Football Uniform">
                        </div>
                        <div class="uniform-text">
                            <h5>American Football Uniforms</h5>
                            <p>We are a premier sportswear manufacturer and exporter, capable of producing American football uniforms in any size and design for men and women.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Uniform Box 2 -->
            <div class="col-md-6">
                <a href="{{ route('products.category', 'Baseball Uniforms') }}">
                    <div class="uniform-box">
                        <div class="uniform-image-wrapper">
                            <img src="images/sport2.png" alt="Baseball Uniform">
                        </div>
                        <div class="uniform-text">
                            <h5>Baseball Uniforms</h5>
                            <p>We offer premium uniforms and jerseys for baseball in all sizes for both men and women. Share your requirements, and we’ll manufacture them for you.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Uniform Box 3 -->
            <div class="col-md-6">
                <a href="{{ route('products.category', 'Basketball Uniforms') }}">
                    <div class="uniform-box">
                        <div class="uniform-image-wrapper">
                            <img src="images/sport3.png" alt="Basketball Uniform">
                        </div>
                        <div class="uniform-text">
                            <h5>Basketball Uniforms</h5>
                            <p>We are a leading provider of basketball uniforms, offering jerseys and shorts for youth and professional teams.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Uniform Box 4 -->
            <div class="col-md-6">
                <a href="{{ route('products.category', 'Soccer Football Uniforms') }}">
                    <div class="uniform-box">
                        <div class="uniform-image-wrapper">
                            <img src="images/sport4.png" alt="Soccer Uniform">
                        </div>
                        <div class="uniform-text">
                            <h5>Soccer / Football Uniforms</h5>
                            <p>As a top sportswear manufacturer and exporter, we create custom soccer and football uniforms in any size and design for both men and women.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Uniform Box 5 -->
            <div class="col-md-6">
                <a href="{{ route('products.category', 'Rugby Uniforms') }}">
                    <div class="uniform-box">
                        <div class="uniform-image-wrapper">
                            <img src="images/sport5.png" alt="Rugby Uniform">
                        </div>
                        <div class="uniform-text">
                            <h5>Rugby Uniforms</h5>
                            <p>Your destination for rugby uniforms, jerseys, custom warm-ups, and team kits. We provide everything you need to excel on the pitch.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Uniform Box 6 -->
            <div class="col-md-6">
                <a href="{{ route('products.category', 'Ice Hockey Uniforms') }}">
                    <div class="uniform-box">
                        <div class="uniform-image-wrapper">
                            <img src="images/sport6.png" alt="Ice Hockey Uniform">
                        </div>
                        <div class="uniform-text">
                            <h5>Ice Hockey Uniforms</h5>
                            <p>We produce high-performance custom hockey jerseys and uniforms for professional teams and clubs, ensuring comfort and durability.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Uniform Box 7 -->
            <div class="col-md-6">
                <a href="{{ route('products.category', 'Golf Clothing') }}">
                    <div class="uniform-box">
                        <div class="uniform-image-wrapper">
                            <img src="images/sport7.png" alt="Golf Clothing">
                        </div>
                        <div class="uniform-text">
                            <h5>Golf Clothing</h5>
                            <p>As a leading sportswear manufacturer and exporter, we create custom golf clothing in any size and design for men and women.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Uniform Box 8 -->
            <div class="col-md-6">
                <a href="{{ route('products.category', 'Tennis Clothing') }}">
                    <div class="uniform-box">
                        <div class="uniform-image-wrapper">
                            <img src="images/sport8.png" alt="Tennis Clothing">
                        </div>
                        <div class="uniform-text">
                            <h5>Tennis Clothing</h5>
                            <p>We offer premium quality tennis clothing at competitive prices in any size for men and women. Share your requirements, and we’ll take care of the rest.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Uniform Box 9 -->
            <div class="col-md-6">
                <a href="{{ route('products.category', 'Cycling Clothing') }}">
                    <div class="uniform-box">
                        <div class="uniform-image-wrapper">
                            <img src="images/sport9.png" alt="Cycling Clothing">
                        </div>
                        <div class="uniform-text">
                            <h5>Cycling Clothing</h5>
                            <p>We manufacture premium quality cycling clothing with extensive customization options, including a wide range of colors, designs, and features.</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Uniform Box 10 -->
            <div class="col-md-6">
                <a href="{{ route('products.category', 'Cricket Uniforms') }}">
                    <div class="uniform-box">
                        <div class="uniform-image-wrapper">
                            <img src="images/sport10.png" alt="Cricket Uniform">
                        </div>
                        <div class="uniform-text">
                            <h5>Cricket Uniforms</h5>
                            <p>We create premium quality cricket uniforms at competitive prices, available in any size for both men and women. Share your requirements, and we’ll handle the rest.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <br> <br>
    @extends('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>