<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
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

    .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 60vh;
            padding: 20px;
            background-color: white;
        }
        .content-box {
            background-color: white;
            width: 90%;
            border-radius: 8px;
            padding: 20px;
        }
        .content-box p {
            line-height: 1.8;
            color: black;
            font-size: 1.2rem;
            
        }
        .content-box a {
            color: #007bff;
            text-decoration: none;
        }
        .content-box a:hover {
            text-decoration: underline;
        }

        .iconboox{
        background-color: #2DCCEC;
        color: white;
        padding-top: 90px;
        padding-bottom: 90px;
       }
        .category-heading {
            text-align: center;
            font-weight: bold;
            margin-top: 50px;
        }
        .category-icons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
               width: 100%;
               
        }
        .category-icons .icon-box {
            margin: 15px;
            text-align: center;
            
        }

        .category-icons .icon-box img{
            height: 70px;
        }

        .category-title {
            margin-top: 60px;
            font-size: 34px;
            font-weight: bold;
            color: white;
            z-index: 3; /* Ensures the text is above the overlay */
            transition: transform 0.3s ease;
            position: relative;
        }

        .hover-text {
            margin-top: 10px;
            font-size: 18px;
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
            position: relative;
            z-index: 3; /* Ensures hover text is above the overlay */
        }

        .category-box {
            position: relative;
            background-size: cover;
            background-position: center;
            height: 250px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: transform 0.3s ease;
            overflow: hidden;
            flex-direction: column;
        }

        .category-box:hover {
            transform: scale(1.05);
        }

        .category-box:hover .category-title {
            transform: translateY(-10px);
        }

        .category-box:hover .hover-text {
            opacity: 0.6;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 10px;
            z-index: 2; /* Sets the overlay below the text */
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .more-categories-btn {
            background-color: red;
            color: white;
            padding: 20px 40px;
            border-radius: 10px;
            border: none;
            text-transform: uppercase;
        }

        .more-categories-btn:hover {
            background-color: darkred;
        }
        
        @media (max-width: 992px) {
            .asdf {
                font-size: smaller;
            }
        }

</style>
<body>
    @include('layouts.navbar')

    <div class="bbooxx">
        <img src="images/Janletic-Sports-wear-manufacturer-Pakistan.jpg" class="img-fluid" alt="...">
        <div class="overlay">
          <h1>About Us</h1>
        </div>
      </div>
      <div class="wrapper">
        <div class="content-box">
            <p>At Ethletia Sports, we specialize in creating high-quality, customizable sportswear and accessories for brands worldwide. Since 2021, we’ve been committed to making products that meet your unique vision with a focus on quality, ethical production, and fast delivery.

                Our products are made with care, using sustainable practices and top-notch materials to ensure durability and style. We handle every step of production—from design to shipping—so you can trust that your order will be delivered promptly and meet the highest standards.
                
                We value our clients as partners, offering flexible order quantities and free consultations to help you bring your brand’s vision to life. Ethletia Sports is here to support you with sportswear solutions that align with your values and goals.
                
                Let us help bring your brand’s vision to life—reach out today.</p>

    <p><a href="/Contact-US">Contact us</a> today to discover how we can elevate your business to the next level.</p>
        </div>
    </div>
    <div class="iconboox">
        <!-- Sportswear Categories Section -->
        <div class="container">
            <h2 class="category-heading">SPORTSWEAR CATEGORIES</h2>
            <div class="category-icons">
                <div class="icon-box">
                    <img src="images/american football.png" alt="">
                    <p>American Football</p>
                </div>
                <div class="icon-box">
                    <img src="images/baseball.png" alt="">
                    <p>Baseball</p>
                </div>
                <div class="icon-box">
                 <img src="images/basketball.png" alt="">
                    <p>Basketball</p>
                </div>
                <div class="icon-box">
                    <img src="images/soccer.png" alt="">
                    <p>Soccer</p>
                </div>
                <div class="icon-box">
                  <img src="images/rugby.png" alt="">
                    <p>Rugby</p>
                </div>
                <div class="icon-box">
                   <img src="images/ice hockey.png" alt="">
                    <p>Ice Hockey</p>
                </div>
                <div class="icon-box">
      <img src="images/gold.png" alt="">
                    <p>Golf</p>
                </div>
                <div class="icon-box">
                 <img src="images/tennis.png" alt="">
                    <p>Tennis</p>
                </div>
                <div class="icon-box">
                   <img src="images/cycling.png" alt="">
                    <p>Cycling</p>
                </div>
                <div class="icon-box">
                    <img src="images/circket.png" alt="">
                    <p>Cricket</p>
                </div>
            </div>
        </div>
        <!-- Activewear Categories Section -->
        <div class="container">
            <h2 class="category-heading">ACTIVEWEAR CATEGORIES</h2>
            <div class="category-icons">
                <div class="icon-box">
                  <img src="images/hoodies.png" alt="">
                    <p>Hoodies</p>
                </div>
                <div class="icon-box">
                    <img src="images/jackets.png" alt="">
                    <p>Jackets</p>
                </div>
                <div class="icon-box">
                    <img src="images/sports bras.png" alt="">
                    <p>Sports Bras</p>
                </div>
                <div class="icon-box">
                    <img src="images/leggings and tights.png" alt="">
                    <p style="width: 100px;">Leggings & Tights</p>
                </div>
                <div class="icon-box">
                    <img src="images/sweatshirts.png" alt="">
                    <p>Sweatshirts</p>
                </div>
                <div class="icon-box">
                    <img src="images/pants and jogers.png" alt="">
                    <p>Pants & Joggers</p>
                </div>
                <div class="icon-box">
                    <img src="images/tops, t-shirt & rash guards.png" alt="">
                    <p style="width: 100px;">Tops, T-Shirts & Rash Guards</p>
                </div>
                <div class="icon-box">
                    <img src="images/tank tops.png" alt="">
                    <p>Tank Tops</p>
                </div>
                <div class="icon-box">
                    <img src="images/shorts.png" alt="">
                    <p>Shorts</p>
                </div>
            </div>
        </div>
      </div>
      
      @extends('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
