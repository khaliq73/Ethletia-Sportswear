<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Blogs - Professional Design</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="more-blogs.css">
</head>
<style>

/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


        
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



/* Blog Container Styling */
.blog-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
}

/* Blog Card Styling */
.blog-card {
    
    background-color: #fff;
    width: calc(50% - 20px); /* 2 blog cards per row */
    margin: 20px 0;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    overflow: hidden;
}

.blog-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
}

/* Blog Images */
.blog-card img {
    width: 100%;
    height: 650px;
    object-fit: cover;
    border-radius: 12px 12px 0 0;
}

/* Blog Content */
.blog-content {
    padding: 15px;
}

h3 {
    font-family: 'Roboto', sans-serif;
    font-weight: 600;
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 10px;
    transition: color 0.3s ease;
}

p {
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    font-size: 0.95rem;
    color: #666;
    margin-bottom: 20px;
}

/* Read More Button */
.read-more-btn {
    font-family: 'Roboto', sans-serif;
    background-color: #2DCCEC;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1em;
    display: inline-block;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.read-more-btn:hover {
    background-color: white;
    color:#2DCCEC;
    border: 1px solid #2DCCEC;
    transform: translateY(-2px);
}

/* Hover Effects */
.blog-card:hover h3 {
    color: #2DCCEC;
}

/* Responsive Design */
@media (max-width: 992px) {
    .blog-card {
        width: 100%; /* Full width for medium screens */
    }
}

    
</style>
<body>
    @include('layouts.navbar')

    <div class="bbooxx">
        <img src="images/Janletic-Sports-wear-manufacturer-Pakistan.jpg" class="img-fluid" alt="...">
        <div class="overlay">
          <h1>Latest Blogs</h1>
        </div>
      </div>
    

<!-- Blog Container -->
<div class="blog-container">
    <!-- Blog Card 1 -->
    <div class="blog-card">
        <img src="images/Custom-Soccer-Jerseys-Manufacturer-Janletic-Sports-300x300.jpg" alt="Blog Image 1">
        <div class="blog-content">
            <h3>Affordable Custom Soccer Uniforms: High-Quality Kits for Teams, Clubs, and Leagues</h3>
            <p>Team unity and performance are closely linked in soccer, making high-quality uniforms a crucial factor.</p>
            <a href="Blog1-Post1" class="read-more-btn">Read More</a>
        </div>
    </div>

    <!-- Blog Card 2 -->
    <div class="blog-card">
        <img src="images/Activewear-Janletic-Sports.jpg" alt="Blog Image 2">
        <div class="blog-content">
            <h3>Custom Clothing Manufacturers in the Pakistan: The Complete Guide to High-Quality Sports Apparel</h3>
            <p>Finding the right custom clothing manufacturer in the Pakistan is essential for businesses and sports teams alike.</p>
            <a href="/Blog2-Post2" class="read-more-btn">Read More</a>
        </div>
    </div>

    <!-- Repeat for 8 more blog cards -->
    <div class="blog-card">
        <img src="images/Baseball-Jersey-Janletic-Sports-2-300x300.jpg" alt="Blog Image 3">
        <div class="blog-content">
            <h3>Custom Baseball Jerseys Maker: Create Unique Jerseys for Team</h3>
            <p>A baseball jersey is more than just part of the uniform; it symbolizes the team's identity and spirit.</p>
            <a href=" /Blog3-Post3" class="read-more-btn">Read More</a>
        </div>
    </div>

    <div class="blog-card">
        <img src="images/Custom-Hockey-jerseys-by-Janletic-Sports-300x300.jpg" alt="Blog Image 4">
        <div class="blog-content">
            <h3>The Evolution of Custom Sports Jerseys</h3>
            <p>More than mere clothing, sports jerseys embody team identity, pride, and unity, evolving over time.</p>
            <a href="/Blog4-Post4" class="read-more-btn">Read More</a>
        </div>
    </div>

    <div class="blog-card">
        <img src="images/Custom-Made-Shirts-by-Janletic-Sports-300x300.jpg" alt="Blog Image 5">
        <div class="blog-content">
            <h3>Guide to Breaking Down the Costs of Custom-Made Shirts</h3>
            <p>In the competitive landscape of custom apparel in the Pakistan, understanding the cost influences is crucial.</p>
            <a href="/Blog5-Post5" class="read-more-btn">Read More</a>
        </div>
    </div>

    <div class="blog-card">
        <img src="images/Polyester-PolyCotton-Cotton-Fabric-Janletic-Sports-300x300.jpg" alt="Blog Image 6">
        <div class="blog-content">
            <h3>Comprehensive Guide to the Polyester and Cotton Fabric</h3>
            <p>When it comes to fabric choices, polyester and cotton blends are often at the forefront of discussions.</p>
            <a href="/Blog6-Post6" class="read-more-btn">Read More</a>
        </div>
    </div>

    <div class="blog-card">
        <img src="images/Viscose-Fabric-Janletic-Sports.jpg" alt="Blog Image 7">
        <div class="blog-content">
            <h3>Viscose Fabric: A Perfect Blend of Comfort and Performance</h3>
            <p>Choosing the right fabric for athletic wear is crucial to balance comfort, performance, and style.</p>
            <a href="/Blog7-Post7" class="read-more-btn">Read More</a>
        </div>
    </div>

    <div class="blog-card">
        <img src="images/Custom-Polo-shirts-by-Janletic-Sports.png" alt="Blog Image 8">
        <div class="blog-content">
            <h3>Custom Polo Shirts: The Definitive Guide to High Quality and Style</h3>
            <p>Custom polo shirts are an excellent way to showcase your brand, team, or event effectively.</p>
            <a href="/Blog8-Post8" class="read-more-btn">Read More</a>
        </div>
    </div>

    <div class="blog-card">
        <img src="images/Custom-Soccer-Jerseys-and-Football-Jerseys-makers-USA-UK-CANADA-EUROPE-AUSTRALIA.jpg" alt="Blog Image 9">
        <div class="blog-content">
            <h3>Unite Your Team on the Field: The Power of Custom Soccer Jerseys (and More!)</h3>
            <p>Picture your team entering the field as a cohesive unit, united not just in skill but in spirit through custom jerseys.</p>
            <a href="/Blog9-Post9" class="read-more-btn">Read More</a>
        </div>
    </div>

    <div class="blog-card">
        <img src="images/Custom-Sweatshirt-manufacturer-USA-CANADA-EUROPE-AUSTRALIA.png" alt="Blog Image 10">
        <div class="blog-content">
            <h3>Why Custom Sweatshirts Are Your Brand’s Secret Weapon</h3>
            <p>Custom sweatshirts offer more than warmth; they provide a unique opportunity for brand visibility in sportswear.</p>
            <a href="/Blog10-Post10" class="read-more-btn">Read More</a>
        </div>
    </div>
</div>
@extends('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"></script>
</body>
</html>
