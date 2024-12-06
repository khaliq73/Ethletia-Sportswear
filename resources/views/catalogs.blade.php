<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
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
            width: 180px;  /* Set fixed width */
            height: 180px; /* Set fixed height */
            background-color: #e0e0e0;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 20px;
            flex-shrink: 0;   
        }
        .uniform-image-wrapper img {
            width: 180px;   /* Ensure image fills the wrapper */
            height: 180px;  /* Ensure image fills the wrapper */
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

        .uniform-text .bttnn {
            background-color: #2DCCEC;
            color: white;
            border: 1px solid #2DCCEC;
            margin: 5px;
            padding: 5px 25px; 
        }
        .uniform-text .bttnn:hover {
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
                 /* Adjust height */
                margin-bottom: 15px;
            }
            .uniform-text {
                width: 100%;
            }
            .uniform-text h5 {
                font-size: 18px;
                margin-top:30px;
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
                /* Adjust height */
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
</head>
<body>
    @include('layouts.navbar')

    <div class="bbooxx">
        <img src="images/Janletic-Sports-wear-manufacturer-Pakistan.jpg" class="img-fluid" alt="...">
        <div class="overlay">
          <h1> Catalogs of Sportswear, Activewear & more</h1>
        </div>
      </div>
      <section class="custom-section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <!-- Left box with heading -->
                <div class="col-md-5 text-md-end left-box">
                    <h1 class="custom-heading">
                        Check out Catalogs of Sportswear, Activewear and other Categories</h1>
                </div>
                <!-- Middle divider (vertical line) -->
                <div class="col-md-1 text-center d-flex justify-content-center">
                    <div class="divider"></div>
                </div>
                <!-- Right box with description -->
                <div class="col-md-5 text-md-start right-box">
                    <p class="custom-text">Custom Apparel Manufacturer, Exporter, and distributor from Sialkot, Pakistan. Get High-Quality products at competitive prices. Along with the products listed in catalogs, you can share your own design with us too. Other than that, you can also order sportswear & activewear products which are listed on our website.</p>
                </div>
            </div>
        </div>
    </section>
      <div class="container">
      
        <div class="row">
            <!-- Uniform Box 1 -->
            <div class="col-md-6">
                <div class="uniform-box">
                    <div class="uniform-image-wrapper">
                        <img src="images/catalog1.png" alt="American Football Uniform">
                    </div>
                    <div class="uniform-text">
                        <h5>Sportswear Catalog</h5>
                        <p>Premium quality Sportswear products at competitive prices, check out our sportswear category or view the catalog for complete range.</p>
                        <a href="/SportswearCatalog"><button class="bttnn btn-danger">view</button></a>
                      
                    </div>
                </div>
            </div>
            <!-- Uniform Box 2 -->
            <div class="col-md-6">
                <div class="uniform-box">
                    <div class="uniform-image-wrapper">
                        <img src="images/catalog2.png" alt="Baseball Uniform">
                    </div>
                    <div class="uniform-text">
                        <h5>Activewear Catalog</h5>
                        <p>Check out our premium quality activewear product range, visit our activewear category or view the catalog for complete for complete range.</p>
                        <a href="/ActivewearCatalog"><button class="bttnn btn-danger">view</button></a>
                    </div>
                </div>
            </div>
            <!-- Uniform Box 3 -->
            <div class="col-md-6">
                <div class="uniform-box">
                    <div class="uniform-image-wrapper">
                        <img src="images/catalog3.png" alt="Basketball Uniform">
                    </div>
                    <div class="uniform-text">
                        <h5>Casual wear Catalog</h5>
                        <p>We are one of the best manufacturers and exporters for Casual wear Products. Check out our wide range of Casual wear products.</p>
                        <a href="/Casual-wear"><button class="bttnn btn-danger">view</button></a>
                    </div>
                </div>
            </div>
            <!-- Uniform Box 4 -->
            <div class="col-md-6">
                <div class="uniform-box">
                    <div class="uniform-image-wrapper">
                        <img src="images/catalog4.png" alt="Soccer Uniform">
                    </div>
                    <div class="uniform-text">
                        <h5>Gloves Catalog</h5>
                        <p>Check out our premium range of gloves, we can manufacture gloves for you for almost every sport, view our gloves catalog for the complete range.</p>
                        <a href="/Gloves"><button class="bttnn btn-danger">view</button></a>
                    </div>
                </div>
            </div>
     
            <!-- Uniform Box 5 -->
            <div class="col-md-6">
                <div class="uniform-box">
                    <div class="uniform-image-wrapper">
                        <img src="images/catalog5.png" alt="Running Apparel">
                    </div>
                    <div class="uniform-text">
                        <h5>Accessories Catalog</h5>
                        <p>View our accessories catalog to explore our premium quality products which include caps, socks, scarves, and many other products.</p>
                        <a href="/Accessories"><button class="bttnn btn-danger">view</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br> <br>

    @extends('layouts.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"></script>
</body>
</html>
