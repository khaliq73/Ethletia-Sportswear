<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activewear</title>
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
        .uniform-text .btn {
            margin: 5px;
            padding: 5px 15px;
           background-color: #2DCCEC;
           color:white;

           border: 1px solid #2DCCEC;
        }
        .uniform-text .btn:hover {
            background-color: white;
            color:#2DCCEC;
            border: 1px solid #2DCCEC;
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
            Gym Clothing & Activewear Manufacturer</h1>
        </div>
      </div>
      <section class="custom-section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <!-- Left box with heading -->
                <div class="col-md-5 text-md-end left-box">
                    <h1 class="custom-heading">Private Label Activewear Manufacturer and Exporter Gym, Yoga & Fitness wear</h1>
                </div>
                <!-- Middle divider (vertical line) -->
                <div class="col-md-1 text-center d-flex justify-content-center">
                    <div class="divider"></div>
                </div>
                <!-- Right box with description -->
                <div class="col-md-5 text-md-start right-box">
                   <p class="custom-text">Leading manufacturer, exporter, and supplier of custom activewear and workout apparel from Sialkot, Pakistan. Offering high-quality wholesale athletic wear, including custom tracksuits, hoodies, jackets, leggings, sports bras, shorts, and tank tops at competitive prices. We provide worldwide shipping to the USA, Canada, Europe, and Australia.</p>

                </div>
            </div>
        </div>
    </section>
      <div class="container">   
        <div class="row">
          <!-- Uniform Box 2 - Hoodies -->
<div class="col-md-6">
    <a href="{{ route('products.category', 'Hoodies') }}">
        <div class="uniform-box">
            <div class="uniform-image-wrapper">
                <img src="images/active1.png" alt="Hoodies">
            </div>
            <div class="uniform-text">
                <h5>Hoodies</h5>
                <p>Our custom hoodies and wholesale tracksuits are designed for ultimate comfort and durability, perfect for running or working out. Share your design with us, and we'll handle the rest.</p>
          
            </div>
        </div>
    </a>
</div>
<!-- Uniform Box 3 - Jackets -->
<div class="col-md-6">
    <a href="{{ route('products.category', 'Jackets') }}">
        <div class="uniform-box">
            <div class="uniform-image-wrapper">
                <img src="images/active2.png" alt="Jackets">
            </div>
            <div class="uniform-text">
                <h5>Jackets</h5>
                <p>We specialize in manufacturing high-quality custom jackets, jerseys, and tracksuits for men and women in any size, all at competitive prices. Share your requirements, and we'll create them for you.</p>
        
            </div>
        </div>
    </a>
</div>
<!-- Uniform Box 4 - Varsity Jackets -->
<div class="col-md-6">
    <a href="{{ route('products.category', 'Varsity Jackets') }}">
        <div class="uniform-box">
            <div class="uniform-image-wrapper">
                <img src="images/varsey jakets.jpg" alt="Varsity Jackets">
            </div>
            <div class="uniform-text">
                <h5>Varsity Jackets</h5>
                <p>Our high-quality varsity jackets are designed for both comfort and style. They are perfect for teams or individuals looking to make a statement.</p>
           
            </div>
        </div>
    </a>
</div>
<!-- Uniform Box 5 - Leggings & Tights -->
<div class="col-md-6">
    <a href="{{ route('products.category', 'Leggings & Tights') }}">
        <div class="uniform-box">
            <div class="uniform-image-wrapper">
                <img src="images/active4.png" alt="Leggings & Tights">
            </div>
            <div class="uniform-text">
                <h5>Leggings & Tights</h5>
                <p>Our leggings and tights are the perfect workout companion, crafted from highly elastic and breathable fabrics that ensure optimal performance in the gym.</p>
        
            </div>
        </div>
    </a>
</div>
<!-- Uniform Box 6 - Sweatshirts -->
<div class="col-md-6">
    <a href="{{ route('products.category', 'Sweatshirts') }}">
        <div class="uniform-box">
            <div class="uniform-image-wrapper">
                <img src="images/active5.png" alt="Sweatshirts">
            </div>
            <div class="uniform-text">
                <h5>Sweatshirts</h5>
                <p>We produce high-quality sweatshirts and uppers in any size for both men and women, all at competitive prices. Simply share your requirements, and we'll handle the manufacturing for you.</p>
          
            </div>
        </div>
    </a>
</div>
<!-- Uniform Box 7 - Pants & Joggers -->
<div class="col-md-6">
    <a href="{{ route('products.category', 'Pants & Joggers') }}">
        <div class="uniform-box">
            <div class="uniform-image-wrapper">
                <img src="images/active6.png" alt="Pants & Joggers">
            </div>
            <div class="uniform-text">
                <h5>Pants & Joggers</h5>
                <p>Our pants and joggers are designed for maximum comfort and durability, perfect for running or working out. Share your design with us, and we'll take care of the rest.</p>
             
            </div>
        </div>
    </a>
</div>
<!-- Uniform Box 8 - Tops, T-Shirts & Rash Guards -->
<div class="col-md-6">
    <a href="{{ route('products.category', 'Tops, T-Shirts & Rash Guards') }}">
        <div class="uniform-box">
            <div class="uniform-image-wrapper">
                <img src="images/active7.png" alt="Tops, T-Shirts & Rash Guards">
            </div>
            <div class="uniform-text">
                <h5>Tops, T-Shirts & Rash Guards</h5>
                <p>As a leading manufacturer of custom t-shirts and rash guards for men and women, we offer competitive wholesale pricing. Our products are crafted from highly breathable fabrics, ensuring excellent performance during gym workouts and other activities.</p>
         
            </div>
        </div>
    </a>
</div>
<!-- Uniform Box 9 - Tank Tops -->
<div class="col-md-6">
    <a href="{{ route('products.category', 'Tank Tops') }}">
        <div class="uniform-box">
            <div class="uniform-image-wrapper">
                <img src="images/active8.png" alt="Tank Tops">
            </div>
            <div class="uniform-text">
                <h5>Tank Tops</h5>
                <p>As a leading activewear manufacturer and exporter, we provide premium custom tank tops for men and women. Our tank tops are expertly crafted from high-quality materials, offering both comfort and durability.</p>
              
            </div>
        </div>
    </a>
</div>
<!-- Uniform Box 10 - Shorts -->
<div class="col-md-6">
    <a href="{{ route('products.category', 'Shorts') }}">
        <div class="uniform-box">
            <div class="uniform-image-wrapper">
                <img src="images/active9.png" alt="Shorts">
            </div>
            <div class="uniform-text">
                <h5>Shorts</h5>
                <p>Our shorts are designed for maximum comfort and durability, perfect for running or working out. We manufacture high-quality shorts for both men and women.</p>

            </div>
        </div>
    </a>
</div>
<!-- Uniform Box 11 - Sports Bras -->
<div class="col-md-6">
    <a href="{{ route('products.category', 'Sports Bras') }}">
        <div class="uniform-box">
            <div class="uniform-image-wrapper">
                <img src="images/active3.png" alt="Sports Bras">
            </div>
            <div class="uniform-text">
                <h5>Sports Bras</h5>
                <p>We are a leading provider of basketball uniforms, offering jerseys and shorts for youth and professional teams. As a top activewear manufacturer, we specialize in sports bras and yoga wear, creating custom sports bras in any size for girls and women.</p>

            </div>
        </div>
    </a>
</div>
        </div>
    </div>
    <br> 
    @extends('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>    
</body>
</html>