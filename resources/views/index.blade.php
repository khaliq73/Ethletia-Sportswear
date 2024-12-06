<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethletia Sports Wear</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <style>
        body{
            background-color: white;
        }
        .carousel-item {
    position: relative;
}
.carousel-item::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Adjust the rgba values to change color and opacity */
    z-index: 1;
}
.carousel-item img {
    position: relative;
    z-index: 0; /* Ensure the image is behind the overlay */
}
.carousel-caption {
    z-index: 2; /* Ensure the text is above the overlay */
}
        .carousel-caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
    }
    .carousel-caption h1 {
        font-size: 2.5rem; /* Enlarge the title */
        font-weight: bold;
    }
    .carousel-caption p {
        font-size: 1rem; /* Enlarge the paragraph */
        width: 150%;
    }
    .main-wrapper {
      
     background-color:#2DCCEC;
   
      color: white;
      min-height: 80vh;
      padding: 50px 15px;
      padding-top: 160px;
    }
    .whyus{
      color: white;
      width: 40%;
      margin-left: 90px;
    }
    .card {
      background-color: #233E4F;
      border: none;
      color: white;
      border-radius: 10px;
      margin-top: 15px;
    }
    .card-content {
      display: flex;
      align-items: center;
    }
    .card-icon {
      font-size: 2rem;
      margin-right: 15px;
      color: #2DCCEC; /* Bright yellow for better visibility */
      flex-shrink: 0; /* Prevents icon from resizing */
    }
    .btn-quotee {
      background-color: white;
      color: #2DCCEC;
      border-radius: 50px;
      font-weight: bold;
      padding: 10px 25px;
      border: 1px solid #2DCCEC;
    }
    .btn-quotee:hover {
      background-color: #2DCCEC;
      color: white;
      border: 1px solid white;
    }

    @media (max-width: 992px){
      .whyus{
        width: 100%;
        margin-left: 0px;
      }
    }
    @media (max-width: 767px){
      .whyus{
        width: 100%;
        margin-left: 0px;
      }
    }
    @media (max-width: 575px){
      .whyus{
        width: 100%;
        margin-left: 0px;
      }
    }
    .workflow-header {
            text-align: center;
            margin: 30px 0;
        }
        .workflow-header h1 {
            font-weight: bold;
            color: #232a43;
        }
        .workflow-header p {
            color: #2DCCEC;
            font-size: 18px;
            margin-top: -5px;
        }
        .workflow-step {
            text-align: center;
            margin-bottom: 50px;
      
        }
        .workflow-step img {
            border-radius: 50%;
            width: 300px;
            height: 300px;
            object-fit: cover;
        }
        .step-number {
    background-color:#2DCCEC;
    color: white;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 20px auto -25px;
    position: relative;
    font-weight: bold;
    left: 60px;
    box-shadow: 8px 8px 20px rgba(0, 0, 0, 0.6), 
                12px 12px 30px rgba(0, 0, 0, 0.5);
}
        @media (max-width: 992px){
          .workflow-step img {
                width: 100%;
                height: auto;
            }
        }
        @media (max-width: 767px){
            .workflow-step img {
                width: 250px;
                height: 250px;
            }
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
            background-color: #2DCCEC ;
            color: white;
            padding: 20px 40px;
            border-radius: 10px;
            border: none;
            text-transform: uppercase;
        }

        .more-categories-btn:hover {
            background-color: white;
            color:#2DCCEC;
            border: 1px solid #2DCCEC;
        }
        
        @media (max-width: 992px) {
            .asdf {
                font-size: smaller;
            }
        }


        .facts {
        font-family: 'Montserrat', sans-serif;
        background-color: #111;
        color: white;
        
    }

 
.performance-section {
    display: flex;
    justify-content: center; /* Center the section horizontally */
    align-items: center; /* Center the section vertically */
    padding: 50px;
    background-color:  #2DCCEC;
    background-image: url('football-removebg-preview.png.jpg'); /* Add your background image here */
    background-size: cover;
    background-position: center;
    background-blend-mode: overlay; /* Blend the image with the color */
    min-height: 100vh; /* Ensure it takes the full height of the viewport */
    flex-wrap: wrap;
    box-shadow: 0 -10px 20px rgba(0, 0, 0, 0.2), 0 10px 20px rgba(0, 0, 0, 0.2); /* Shadow above and below */
    margin: 0 auto; /* Center horizontally within the page */
}

    .text-section {
        flex: 1;
        max-width: 50%; /* Slightly increased width */
    }

    .sub-heading {
        color: #233E4F;
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .main-headingg {
        color: white;
        font-size: 30px; /* Increased size for emphasis */
        font-weight: 700;
        margin-bottom: 20px;
        align-items: start;
    }

    .kpi-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .kpi-item {
        background-color: #161640;
        padding: 50px;
        border-radius: 15px;
        text-align: center;
        color: white;
        font-size: 17px;
        font-weight: bold;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .kpi-item:hover {
        transform: scale(1.05);
    }

    .kpi-item i {
        font-size: 24px;
        color: #233E4F;
        margin-bottom: 8px;
    }

    .kpi-item span {
        font-size: 13px;
        color: #ccc;
    }

    .whatsapp-button {
        display: inline-block;
        margin-top: 25px;
        padding: 10px 20px;
        background-color: #233E4F;
        color: white;
        text-decoration: none;
        border-radius: 20px;
        font-size: 15px;
        font-weight: bold;
        box-shadow: 0 4px 10px #233E4F;
    }
    .whatsapp-button:hover {
        background-color:  #2DCCEC;
        color: white;
        box-shadow: 0 4px 10px #2DCCEC;
        border: 1px solid white;
    }

    .whatsapp-button i {
        margin-right: 10px;
    }

    .image-section {
        flex: 1;
        text-align: center; /* Center image section */
        max-width: 50%; /* Adjusted width */
    }

    .image-section img {
        max-width: 85%; /* Increased image size */
        height: 800px; /* Increased height */
        border-radius: 10px;
        box-shadow: 0 5px 15px #233E4F;
    }

    /* Responsive adjustments */
    @media (max-width: 1200px) {
        .performance-section {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        .text-section, .image-section {
            max-width: 100%;
        }

        .image-section img {
            max-width: 100%;
            margin-top: 20px;
        }
    }

    @media (max-width: 768px) {
        .kpi-grid {
            grid-template-columns: 1fr; /* Stacked layout for smaller screens */
        }

        .main-heading {
            font-size: 32px;
        }

        .kpi-item {
            padding: 15px;
            font-size: 16px;
        }

        .kpi-item i {
            font-size: 22px;
        }

        .whatsapp-button {
            padding: 12px 25px;
            font-size: 16px;
        }
    }

    @media (max-width: 480px) {
        .main-heading {
            font-size: 28px;
        }

        .sub-heading {
            font-size: 18px;
        }

        .kpi-item {
            padding: 12px;
            font-size: 14px;
        }

        .whatsapp-button {
            padding: 10px 20px;
            font-size: 14px;
        } 
        .image-section img {
            height: 600px;
        }
    }

.bboxx{
    height: 750px;
}
.main-container {
   margin-top: 100px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
}

.imaage1, .imaage2 {
    height: 300px;
    width: 440px;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.589);
}

.imaage1 {
    background-image: url('images/Janletic-Sports-Product-Cover.jpg');
}

.imaage2 {
    background-image: url('images/Activewear-Janletic-Sports.jpg');
    height: 660px;
    margin-top: -421px;
    margin-right: 47px;
}

.caard {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.589);
    padding: 30px;
    max-width: 500px;
    z-index: 2;
    height: 450px;
    margin-left: 80px;
    margin-top: -105px;
}

.intro-badge {
    display: inline-block;
    background-color: #ff464600;
    color: #2DCCEC;
    padding: 9px 18px;
    border-radius: 5px;
    font-size: 14px;
    font-weight: bold;
    border: 2px solid #2DCCEC;
    margin-bottom: 15px;
}

.caard h2 {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 15px;
}

.caard p {
    font-size: 16px;
    color: #555;
    margin-bottom: 20px;
    line-height: 1.6;
}

.caard ul {
    list-style: none;
    margin-bottom: 20px;
}

.caard ul li {
    font-size: 14px;
    color: #000000;
    padding-left: 15px;
    margin-bottom: 10px;
    position: relative;
}

.caard ul li:before {
    content: '•';
    color: #2DCCEC;
    font-size: 20px;
    position: absolute;
    left: 0;
    top: -2px;
}
.btn {
    display: inline-block;
    background-color: #2DCCEC;
    color: white;
    border: 1px solid #2DCCEC;
    text-decoration: none;
    padding: 6px 20px;
    border-radius: 5px;
    text-align: center;
}
.btn:hover {
    background-color: white;
    color:#2DCCEC;
    border: 2px solid #2DCCEC;
}
.caard2 {
    background-color:#2DCCEC;
    border-radius: 10px;
    box-shadow: 0 4px 8px #2DCCEC;
    padding: 30px;
    max-width: 500px;
    height: 480px;
    margin-left: 20px;
}
/* Media Query for screens 950px or less */
@media screen and (max-width: 951px) {
    .bboxx{
        height: 2000px;
    }
    .main-container {
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        width: 100%; /* Ensure container takes full width */
    }

    .caard2 {
        display: none; /* Hide card2 */
    }

    .imaage1 {
        max-width: 100vw;
        width: 100vw;
        height: 370px;
    }

    .caard {
        margin-left: 0;
        margin-top: -1px;
        max-width: 100%;
        padding: 20px;
    }
    .imaage2{
        margin-top: 49px;
        max-width: 100vw;
        width: 100vw;
        margin-right: -3px;
        height: 1051px;
    }
   
}
@media screen and (max-width: 416px){
    .caard{
        height: 400px;
    }

}
@media screen and (max-width: 356px){
    .caard{
        height: 50px;
    }

}
@media screen and (max-width: 305px){
    .caard{
        height: 550px;

    }

}
@media screen and (max-width: 1007px){
    .caard{
        height: 510px;

    }

}
        .contact-box {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 2px 10px #2DCCEC;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center; 
        }
        .contact-item {
        justify-content: center;
            display: flex;
            align-items: center;
            flex: 1;
            min-width: 250px;
            margin: 10px 0;
        }
        .icon-boxx {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #2DCCEC;
            border-radius: 5px;
            margin-right: 15px;
        }
        .icon-boxx i {
            font-size: 24px;
            color: #2DCCEC;
        }
        .contact-info a {
            font-size: 17px;
            font-weight: bold;
            color: #1b1e25;
            margin: 0;
           text-decoration: none;      
          }
          .contact-info a:hover {
            color: #2DCCEC;
        }

        .contact-info p {
            font-size: 17px;
            margin: 0;
            color: #555555;
        }
        .contact-info p:hover{
            color: #2DCCEC;
        }
        @media (max-width: 768px) {
            .contact-box {
                flex-direction: column;
                align-items: center;
            }
            .contact-item {
                margin: 10px 0;
                justify-content: center;
                border-bottom: 1px solid #f2f2f2;
                padding-bottom: 15px;
            }
            .contact-item:last-child {
                border-bottom: none;
            }
        }
        .faq-header {
            height: 120px;
            margin-bottom: 20px;
        }
        .text-section h2 {
            font-size: 18px;
            text-align: center;
        }
        .faq-item {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }
        .faq-item h6 {
            color: black;
            font-weight: bold;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 17px;
        }
        .contact-form {
            margin-top: 30px;
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 5px;
            height: 590px;
            display: flex;
            flex-direction: column;
            gap: 15px; /* Add spacing between fields */
        }
        .contact-header {
            background-color: #2DCCEC;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .form-group, .form-row {
            flex-grow: 1;
        }
        .form-control {
            margin-top: 20px;
            height: 60px; /* Consistent input height */
        }
        textarea {
            resize: none;
            height: 90px; /* Set a fixed height for the textarea */
        }
        .btn-submit {
            background-color: #2DCCEC;
            color: white;
            border: none;
            padding: 14px;
            width: 36%;
            border-radius: 10px;
            font-weight: bold;
            margin-top: 20px;
        }
        @media (max-width: 1200px){
            .btn-submit{
font-size: 12px
            }
        }
            @media (max-width: 991px){
            .btn-submit{
font-size: 12px;
width: 45%;
            }
        }

        @media (max-width: 356px){
            .btn-submit{
font-size: 11px;
width: 50%;
padding: 10px;
            }
        }
        .button-wrapper {
            text-align: center;
        }
        .arrow {
            transition: transform 0.3s;
        }
        .collapsed .arrow {
            transform: rotate(0deg);
        }
        .expanded .arrow {
            transform: rotate(120deg);
        }
     
 .blog-card {
 background-color: #2DCCEC;
 color: white;
 border-radius: 10px;
 overflow: hidden;
 display: flex;
 flex-direction: column;
 height: 100%;
 box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
 transition: transform 0.3s;

}
.blog-card:hover {
 transform: scale(1.02);
}
.blog-image img {
 margin-top: 20px;
 margin-left: 30px;
 width: 85%;
 height: 400px;
}
.blog-image img:hover{
 transform: rotate(3deg);
}
.blog-content {
 padding: 20px;
 flex-grow: 1;
 display: flex;
 flex-direction: column;
 justify-content: space-between;
}
.blog-content h5 {
 font-weight: 700;
 margin-bottom: 10px;
}
.blog-content p {
 font-size: 15px;
 margin-bottom: 15px;
 line-height: 1.6;
}
.read-more {
    text-align: center;
width: 40%;
align-self: center;
 background-color: white;
 color: #2DCCEC;
 padding: 8px 15px;
 border-radius: 5px;
 text-decoration: none;
 font-weight: bold;
 transition: background-color 0.3s;
}
.read-more:hover {
 background-color: #f0f0f0;
}

.more-blogs-btn {
        display: flex;
        justify-content: center;
        margin-top: 30px;
      }
      .more-blogs-btn a {
        background-color: #2DCCEC;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        transition: background-color 0.3s;
      }
      .more-blogs-btn a:hover {
        background-color: white;
        border: 1px solid #2DCCEC;
        color: #2DCCEC;
      }

@media (max-width: 1200px){
 .blog-image img {
   margin-left: 24px;
   height: 350px;
   
 } 
 .read-more {
    font-size: 13px;
 }
}
@media (max-width: 991px){
 .blog-image img {
   margin-left: 17px;
   height: 300px;
 } 
 .read-more {
    text-align: center;
    width: 70%;
    padding: 5px 10px;
 }
}

@media (max-width: 767px){
 .blog-image img {
   margin-left: 38px;
   height: 450px;
 } 

 .read-more {
    text-align: center;
    width: 40%;
    padding: 5px 10px;
 }

}

@media (max-width: 470px){
 .blog-image img {
   margin-left: 30px;
   height: 450px;
 } 
}

@media (max-width: 375px){
 .blog-image img {
   margin-left: 24px;
   height: 450px;
 } 
}
    </style>
</head>
<body>
@include('layouts.navbar')
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner ">
          <div class="carousel-item active">
            <img src="images/Janletic-Sports-wear-manufacturer-Pakistan.jpg" class="d-block w-100" height="650px" alt="...">
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                <h1>Athletic Sports Teamwear</h1>
                <p>We are exporters and manufacturers of fully customized wholesale sportswear, fitness apparel,</p>
            </div>
          </div>
          <div class="carousel-item ">
              <img src="images/Janletic-Sports-American-football-uniform-manufacturer-Pakistan-1.jpg" class="d-block w-100" height="650px" alt="...">
              <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                  <h1>Custom American Football Uniforms Manufacture</h1>
                  <p>Order fully customized American football uniforms at wholesale prices for your team or club with our private label and OEM services. We provide top-quality custom jerseys and pants with a low minimum order requirement.</p>
                </div>
          </div>
          <div class="carousel-item">
              <img src="images/Janletic-Sports-Active-wear-manufacturer-Pakistan.jpg" class="d-block w-100" height="650px" alt="...">
              <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                  <h1>Custom Activewear Manufacture</h1>
                  <p>We specialize in exporting and manufacturing fully customized wholesale fitness apparel, activewear, and sportswear.</p>
                </div>
          </div>
          <div class="carousel-item">
            <img src="images/Janletic-Sports-basketball-uniform-manufacturer-Pakistan (1).jpg" class="d-block w-100" height="650px" alt="...">
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                <h1>Custom Basketball Uniform Manufacture</h1>
                <p>Get personalized wholesale basketball uniforms tailored for your team or club through our private label and OEM services. We provide high-quality custom jerseys and shorts with a low minimum order requirement.</p>
              </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
  </div>
<div class="imgboxxxx" style="margin-top: -100px; position:absolute; z-index: 1; width: 100%;  color:#2DCCEC;">
<img class="0000"  src="images/janletic-img3-1.png" alt="" style="width: 100%; height: 100px; color:#2DCCEC;">
</div>
<div class="main-wrapper">
  <div class="container" style="margin-top: 60px;">
    <div class="row align-items-center">
      <!-- WHY US Text Section -->
      <div class="col-lg-6 mb-4 whyus">
        <h2 class="fw-bold">WHY US?</h2>
        <p>Take advantage of low minimum order quantities and fast turnaround times. Our rigorous quality control guarantees customer satisfaction. Streamline your sportswear and activewear production with us—once your specifications are finalized, we swiftly move into manufacturing.</p>
        <a  href="/get-a-quote"><button class=" btn-quotee mt-3">GET QUOTE</button></a>
      </div>
    
      <!-- Cards Section -->
      <div class="col-lg-6">
        <div class="row">
          <div class="col-md-6">
            <div class="card p-3">
              <div class="card-content">
                <i class="bi bi-award-fill card-icon"></i>
                <div>
                  <h5 class="fw-bold">Quality Focus</h5>
                  <p>We strive to provide exceptional quality that aligns with our customers' expectations.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card p-3">
              <div class="card-content">
                <i class="bi bi-truck card-icon"></i>
                <div>
                  <h5 class="fw-bold">Worldwide Shipping</h5>
                  <p>We offer global shipping using premier services such as DHL and FedEx.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card p-3">
              <div class="card-content">
                <i class="bi bi-chat-dots-fill card-icon"></i>
                <div>
                  <h5 class="fw-bold">Free Expert Help</h5>
                  <p>Need help getting started? Contact our experts for a free consultation on WhatsApp!</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card p-3">
              <div class="card-content">
                <i class="bi bi-cash-coin card-icon"></i>
                <div>
                  <h5 class="fw-bold">Best Prices</h5>
                  <p>We offer high-quality products at the best prices to fulfill our customers' expectations.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <!-- Heading Section -->
  <div class="workflow-header">
      <h1>OUR WORKFLOW</h1>
      <p> <span >________</span> Work Process <span>________</span> </p>
  </div>
  <!-- Workflow Steps in Grid -->
  <div class="row">
      <!-- Step 1 -->
      <div class="col-md-4 workflow-step">
        <div class="step-number">1</div>
        <img src="images/work3.jpg" alt="Material & Fabric Sourcing">
        <h5 class="mt-3">Material & Fabric Sourcing</h5>
        <p>We source fabric from the most reliable and trusted suppliers. It is stored on racks, thoroughly inspected, and then moved to the cutting department.</p>
      </div>
      <!-- Step 2 -->
      <div class="col-md-4 workflow-step">
        <div class="step-number">2</div>
        <img src="images/work1.jpg" alt="Pattern Making">
        <h5 class="mt-3">Pattern Making</h5>
        <p>Patterns are created based on the specified sizes and designs. Each product features a unique pattern, crafted with meticulous accuracy and precision.</p>
      </div>
 <!-- Step 3 -->
      <div class="col-md-4 workflow-step">
        <div class="step-number">3</div>
        <img src="images/work2.jpg" alt="Pre-Production Sample">
        <h5 class="mt-3">Pre-Production Sample</h5>
        <p>Prior to bulk production, we create a sample for your approval and send it to you. Once you give your approval, we proceed to the next stage.</p>
      </div>
  </div>
  <div class="row">
      <!-- Step 4 -->
      <div class="col-md-4 workflow-step">
          <div class="step-number">4</div>
          <img src="images/work4.jpg" alt="Cutting & Printing Process">
          <h5 class="mt-3">Cutting & Printing Process</h5>
          <p>Once sourced, the fabric is cut into panels and readied for printing according to the design specifications.</p>
        </div>
      <!-- Step 5 -->
      <div class="col-md-4 workflow-step">
          <div class="step-number">5</div>
          <img src="images/work5.jpg" alt="Sewing & Quality Check">
          <h5 class="mt-3">Sewing & Quality Check</h5>
          <p>The cut panels are stitched together, and the completed items undergo quality inspections before being packaged for final delivery.</p>
        </div>
      <!-- Step 6 -->
      <div class="col-md-4 workflow-step">
          <div class="step-number">6</div>
          <img src="images/work6.jpg" alt="Packing & Delivery">
          <h5 class="mt-3">Packing & Delivery</h5>
          <p>Once the items are pressed and tagged, they are packaged and dispatched for delivery to the customer.</p>
        </div>
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
            <img src="images/hoodies.png" alt="" >
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
<div class="bbox">
  <div class="container py-5">
    <h2 class="asdf text-center font-weight-bold mb-4" style=" font-weight: bold; font-size: 50px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
      Our Top-Notch Sports Apparel
    </h2>
    <p class="text-center mb-5">
      We focus on manufacturing, supplying, and exporting wholesale sports apparel, sportswear products, and team uniforms at highly competitive prices, ensuring premium quality to fulfill our customers’ expectations.
    </p>
    <div class="row">
      <div class="col-md-4 mb-4">
        <a href="{{ route('products.category', 'American football uniforms') }}" style="text-decoration:none;">
          <div class="category-box" style="background-image: url('images/Janletic-Sports-American-football-uniform-manufacturer-Pakistan-1.jpg');">
            <div class="overlay"></div>
            <h5 class="category-title">American Football Uniforms</h5>
            <p class="hover-text">Personalized American Football Uniforms</p>
          </div>
        </a>
      </div>
      <div class="col-md-4 mb-4">
        <a href="{{ route('products.category', 'Baseball Uniforms') }}" style="text-decoration:none;">
          <div class="category-box" style="background-image: url('images/Janletic-Sports-Baseball-Uniforms-Cover-1200x800-1 (7).jpg');">
            <div class="overlay"></div>
            <h5 class="category-title">Baseball Uniforms</h5>
            <p class="hover-text">Personalized Baseball Uniforms</p>
          </div>
        </a>
      </div>
      <div class="col-md-4 mb-4">
        <a href="{{ route('products.category', 'Basketball Uniforms') }}" style="text-decoration:none;">
          <div class="category-box" style="background-image: url('images/Custom-Basketball-Uniforms-Maker.jpg');">
            <div class="overlay"></div>
            <h5 class="category-title">Basketball Uniforms</h5>
            <p class="hover-text">Personalized Basketball Uniforms</p>
          </div>
        </a>
      </div>
      <div class="col-md-4 mb-4">
        <a href="{{ route('products.category', 'Soccer Football Uniforms') }}" style="text-decoration:none;">
          <div class="category-box" style="background-image: url('images/Custom-Soccer-Uniforms-Maker.jpg');">
            <div class="overlay"></div>
            <h5 class="category-title">Soccer Uniforms</h5>
            <p class="hover-text">Personalized Soccer Uniforms</p>
          </div>
        </a>
      </div>
      <div class="col-md-4 mb-4">
        <a href="{{ route('products.category', 'Rugby Uniforms') }}" style="text-decoration:none;">
          <div class="category-box" style="background-image: url('images/Custom-Rugby-Uniforms-Maker.jpg');">
            <div class="overlay"></div>
            <h5 class="category-title">Rugby Uniforms</h5>
            <p class="hover-text">Personalized Rugby Uniforms</p>
          </div>
        </a>
      </div>
      <div class="col-md-4 mb-4">
        <a href="{{ route('products.category', 'Ice Hockey Uniforms') }}" style="text-decoration:none;">
          <div class="category-box" style="background-image: url('images/Janletic-Sports-Ice-Hockey-Uniforms-Cover-1200x800-1.jpg');">
            <div class="overlay"></div>
            <h5 class="category-title">Ice Hockey Uniforms</h5>
            <p class="hover-text">Personalized Ice Hockey Uniforms</p>
          </div>
        </a>
      </div>
    </div>
    <div class="button-container">
      <a href="/Sportswear"><button class="more-categories-btn">More Categories</button></a>
    </div>
  </div>
</div>

  <div class="bbox">
    <div class="container py-5">
        <h2 class="asdf text-center font-weight-bold mb-4" style="  font-weight: bold; font-size: 50px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">OUR ACTIVEWEAR PRODUCTS</h2>
        <p class="text-center mb-5">We are experts in manufacturing, supplying, and exporting wholesale sports apparel, sportswear products, and team uniforms at highly competitive prices, ensuring top-notch quality to satisfy our customers’ expectations.</p>
        <div class="row">
       <div class="col-md-4 mb-4">
       <a href="{{ route('products.category', 'Hoodies') }}" style="text-decoration:none;">        
       <div class="category-box" style="background-image: url(images/Janletic-Sports-Hoodies-1200x800-1.jpg);">
                    <div class="overlay"></div>
                    <h5 class="category-title" style="width: 300px;">HOODIES</h5>
                    <p class="hover-text">Personalized Hoodies</p>
                </div>
                </a>
            </div>
           <div class="col-md-4 mb-4">
           <a href="{{ route('products.category', 'Tops, T-Shirts & Rash Guards') }}" style="text-decoration:none;">
           <div class="category-box" style="background-image: url(images/Janletic-Sports-Jackets-1200x800-1.jpg);">
                    <div class="overlay"></div>
                    <h5 class="category-title" style="width: 300px;" >TOPS,T SHIRTS & RASH GUARDS</h5>
                    <p class="hover-text">Personalized Tops, T-Shirts, and Rash Guards</p>
                </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
            <a href="{{ route('products.category', 'Sports Bras') }}" style="text-decoration:none;">    
            <div class="category-box" style="background-image: url(images/Janletic-Sports-Sports-Bras-1200x800-1.jpg);">
                    <div class="overlay"></div>
                    <h5 class="category-title" style="width: 200px;" >SPORTS BRAS</h5>
                    <p class="hover-text">Personalized Sports Bras</p>
                </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
            <a href="{{ route('products.category', 'Leggings & Tights') }}" style="text-decoration:none;">
            <div class="category-box" style="background-image: url(images/Janletic-Sports-Leggings-Tights-1200x800-1.jpg);">
                    <div class="overlay"></div>
                    <h5 class="category-title" style="width: 180px;" >LEGGINGS & TIGHTS</h5>
                    <p class="hover-text">Personalized Leggings and Tights</p>
                </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
            <a href="{{ route('products.category', 'Sweatshirts') }}" style="text-decoration:none;">
            <div class="category-box" style="background-image: url(images/Janletic-Sports-Sweatshirts-1200x800-1.jpg);">
                    <div class="overlay"></div>
                    <h5 class="category-title" style="width: 200px;" >SWEATSHIRTS</h5>
                    <p class="hover-text">Personalized Sweatshirts</p>
                </div>
                </a>
            </div>
            <div class="col-md-4 mb-4">
            <a href="{{ route('products.category', 'Shorts') }}" style="text-decoration:none;">
            <div class="category-box" style="background-image: url(images/Janletic-Sports-Shorts-1200x800-1.jpg);">
                    <div class="overlay"></div>
                    <h5 class="category-title" style="width: 200px;" >GYM SHORTS</h5>
                    <p class="hover-text">Personalized Gym Shorts</p>
                </div>
                </a>
            </div>
        </div>
        <div class="button-container">
           <a href="/Activewear"> <button class="more-categories-btn">More Categories</button></a>
        </div>
    </div>
    </div>
    <br>
    <div class="facts">
        <section class="performance-section">
            <div class="text-section">
                <h3 class="sub-heading">Key Performance Indicators</h3>
                <h3 class="main-headingg">Facts & Figures</h3>
                <div class="kpi-grid">
                    <div class="kpi-item">
                        <i class="fas fa-shopping-cart"></i>
                        <p><span class="counter" data-target="">MOQ</span><br><span>NO MOQ</span></p>
                    </div>
                    <div class="kpi-item">
                        <i class="fas fa-user-clock"></i>
                        <p><span class="counter" data-target="3"></span><span> weeks</span><br><span>Avg. Lead Time</span></p>
                    </div>
                    <div class="kpi-item">
                        <i class="fas fa-users"></i>
                        <p><span class="counter" data-target="3000"></span><span>/per day</span><br><span>Production capacity</span></p>
                    </div>
                    
                    <div class="kpi-item">
                        <i class="fas fa-calendar-check"></i>
                        <p><span class="counter" data-target="1">14</span><span> week</span><br><span>Sample Days</span></p>
                    </div>
                </div>
            </div>
            <div class="image-section">
                <img src="images/girl22.jpg" alt="Tennis Player">
            </div>
        </section>
    </div>
    <script>
        // Function to start the counter animation
        function startCounters() {
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                counter.innerText = '0';
                const updateCounter = () => {
                    const target = +counter.getAttribute('data-target');
                    const current = +counter.innerText;
                    const increment = target / 200;
    
                    if (current < target) {
                        counter.innerText = Math.ceil(current + increment);
                        setTimeout(updateCounter, 10);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCounter();
            });
        }

        // Intersection Observer to detect when the section is in view
        const performanceSection = document.querySelector('.performance-section');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    startCounters();
                    observer.unobserve(performanceSection); // Stop observing after animation starts
                }
            });
        }, { threshold: 0.5 }); // Adjust threshold as needed (0.5 means half of the section needs to be in view)
    
        observer.observe(performanceSection);
    </script>
    <br>
<div class="bboxx">
    <div class="main-container">
        <div class="left-section">
                  <div class="imaage1"></div>
                  <div class="caard">
                    <div class="intro-badge">INTRODUCTION</div>
                    <h2>How We Became Best Among Others?</h2>
                    <p>We are committed to ongoing improvement, striving to provide high-quality products and outstanding customer service. Our objective is to achieve complete customer satisfaction.</p>
                    <ul>
                        <li>Rigorous Quality Control, Ensuring 100% Satisfaction.</li>
                        <li>Experienced Staff, Reliable Testing Procedures.</li>
                        <li>Exceptional Craftsmanship, Skilled and Certified.</li>
                    </ul>
                    <a href="/About-us" class="btn">ABOUT US</a>
                </div>
        </div>
        <div class="right-section">
             <div class="caard2"></div>
             <div class="imaage2"></div>

        </div>
    </div>
</div>
    <br>
    <div class="bax">
    <div class="container my-5">
        <div class="contact-box">
            <div class="contact-item">
                <div class="icon-boxx">
                    <a href=""><i class="bi bi-envelope-fill"></i></a>
                </div>
                <div class="contact-info">
                    
                   <a href="mailto:sales@ethletia.com"> <p>sales@ethletia.com</p></a>
                </div>
            </div>
            <div class="contact-item">
                <div class="icon-boxx">
                   <a href=""> <i class="bi bi-whatsapp"></i></a>
                </div>
                <div class="contact-info">
                 
                   <a href="https://wa.me/923008119361"> <p>+92 0300-8119361</p></a>
                </div>
            </div>
            <div class="contact-item">
                <div class="icon-boxx">
                    <a href=""><i class="bi bi-geo-alt-fill"></i></a>
                </div>
                <div class="contact-info">
                  
                    <a href="https://maps.app.goo.gl/s2wckYBQKNPozPX96">  <p>Sialkot, Pakistan</p></a>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container mt-5">
        <div class="row">
            <!-- FAQ Section -->
            <div class="col-md-6">
                <div class="container mt-5">
                    <div class="faq-header d-flex rounded shadow overflow-hidden">
                        <div class="image-section" style="width: 50%;">
                            <img src="images/FAQs-Janletic-Sports.jpg" alt="FAQ Illustration" class="img-fluid h-100 w-100">
                        </div>
                        <div class="text-section d-flex align-items-center justify-content-center" style="width: 50%; background-color: #2DCCEC; color: white;">
                            <h2>Frequently Asked Questions (FAQs)</h2>
                        </div>
                    </div>
                </div>
                <!-- FAQ Items -->
                <div class="faq-item">
                    <h6 data-toggle="collapse" data-target="#faq1" aria-expanded="false" aria-controls="faq1" class="collapsed">
                        Can I Request A Sample?
                        <span class="arrow">▼</span>
                    </h6>
                    <div id="faq1" class="collapse">
                        <p>Yes, we understand the importance of checking the quality before placing an order...</p>
                    </div>
                </div>
                <div class="faq-item">
                    <h6 data-toggle="collapse" data-target="#faq2" aria-expanded="false" aria-controls="#faq2" class="collapsed">
                        How Long Does Production Take?
                        <span class="arrow">▼</span>
                    </h6>
                    <div id="faq2" class="collapse">
                        <p>The production time depends on the order size and specifications usually we take three weeks to deliver your products</p>
                    </div>
                </div>
                <div class="faq-item">
                    <h6 data-toggle="collapse" data-target="#faq3" aria-expanded="false" aria-controls="#faq3" class="collapsed">
                        What Is Your Minimum Order Quantity (MOQ)?
                        <span class="arrow">▼</span>
                    </h6>
                    <div id="faq3" class="collapse">
                        <p>There is no MOQ varies for different products...</p>
                    </div>
                </div>
                <div class="faq-item">
                    <h6 data-toggle="collapse" data-target="#faq4" aria-expanded="false" aria-controls="#faq4" class="collapsed">
                        Which Countries Do You Ship To?
                        <span class="arrow">▼</span>
                    </h6>
                    <div id="faq4" class="collapse">
                        <p>We ship Worldwide</p>
                    </div>
                </div>
                <div class="faq-item">
                    <h6 data-toggle="collapse" data-target="#faq5" aria-expanded="false" aria-controls="#faq5" class="collapsed">
                        What Payment Methods Do You Support?
                        <span class="arrow">▼</span>
                    </h6>
                    <div id="faq5" class="collapse">
                        <p>We accept a variety of payment options...</p>
                    </div>
                </div>
                <a href="/FAQs"><button class="btn btn-danger mt-3" >More Questions?</button></a>
            </div>
            <!-- Contact Form Section -->
            <div class="col-md-6">
                <div class="contact-form" >
                    <div class="contact-header">CONTACT US</div>
                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="name" class="form-control" placeholder="Your Name*" required>
                            </div>
                            <div class="col">
                                <input type="email" name="email" class="form-control" placeholder="Your Email*" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="country" class="form-control" placeholder="Your Country*" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="contact_number" class="form-control" placeholder="Your Contact Number*" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="4" placeholder="Enter Your Message" required></textarea>
                        </div>
                        <div class="button-wrapper">
                            <button type="submit" class="btn btn-submit">SUBMIT MESSAGE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.faq-item h6').click(function() {
                $(this).toggleClass('expanded collapsed');
                $(this).find('.arrow').text($(this).hasClass('expanded') ? '▲' : '▼');
            });
        });
    </script>
    <br>
<br> <br>   
<div class="container my-5">
    <h1 class="text-center mb-5" style=" font-weight: bold; font-size: 50px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);" >Latest Blogs</h1>
    <p class="text-center mb-5" style="font-size: 20px; margin-top: -20px;">Take a look at our most recent blog posts listed below.</p>
    <div class="row g-4">
      <!-- Blog 1 -->
      <div class="col-md-4">
        <div class="blog-card">
          <div class="blog-image">
            <img src="images/Custom-Soccer-Jerseys-Manufacturer-Janletic-Sports-300x300.jpg" alt="Blog 1">
          </div>
          <div class="blog-content">
            <h5>Affordable Custom Soccer Uniforms: High-Quality Kits for Teams, Clubs, and Leagues</h5>
            <p>In soccer, team unity and performance are closely linked. A key factor that enhances team spirit and boosts player confidence is a high-quality, custom uniform. At Ethletia Sports, we specialize in creating affordable soccer jerseys tailored to the unique requirements of teams, clubs, and leagues worldwide. […]</p>
            <a href="Blog1-Post1" class="read-more">Read More</a>
          </div>
        </div>
      </div>
      <!-- Blog 2 -->
      <div class="col-md-4">
        <div class="blog-card">
          <div class="blog-image">
            <img src="images/Activewear-Janletic-Sports.jpg" alt="Blog 2">
          </div>
          <div class="blog-content">
            <h5>Custom Clothing Manufacturers in the Pakistan: The Complete Guide to High-Quality Sports Apparel</h5>
            <p>Choosing the right custom clothing manufacturer in the Pakistan is crucial for businesses, sports teams, and organizations aiming to create custom sports apparel. Whether you're overseeing a high school sports team, operating a startup, or introducing a new sports brand, partnering with a dependable manufacturer can significantly impact […]</p>
            <a href="/Blog2-Post2" class="read-more">Read More</a>
          </div>
        </div>
      </div>
      <!-- Blog 3 -->
      <div class="col-md-4">
        <div class="blog-card">
          <div class="blog-image">
            <img src="images/Baseball-Jersey-Janletic-Sports-2-300x300.jpg" alt="Blog 3">
          </div>
          <div class="blog-content">
            <h5>Custom Baseball Jerseys Maker: Create Unique Jerseys for Team</h5>
            <p>In baseball, a team’s jersey is more than just a uniform; it symbolizes the team’s identity and unity. At Ethletia Sports, we recognize the importance of teams making an impression both on and off the field. This is why we specialize in crafting high-quality, custom baseball jerseys designed to […]</p>
            <a href="/Blog3-Post3" class="read-more">Read More</a>
          </div>
        </div>
      </div>
      <!-- Blog 4 -->
      <div class="col-md-4">
        <div class="blog-card">
          <div class="blog-image">
            <img src="images/Custom-Hockey-jerseys-by-Janletic-Sports-300x300.jpg" alt="Blog 4">
          </div>
          <div class="blog-content">
            <h5>The Evolution of Custom Sports Jerseys</h5>
            <p>Sports jerseys represent much more than just clothing; they embody team identity, pride, and unity. Their function has evolved from basic apparel to specialized athletic gear that utilizes advanced materials and technology. The evolution of custom sports jerseys, especially custom hockey jerseys, showcases a journey of adaptation and innovation, reflecting […]</p>
            <a href="/Blog4-Post4" class="read-more">Read More</a>
          </div>
        </div>
      </div>
      <!-- Blog 5 -->
      <div class="col-md-4">
        <div class="blog-card">
          <div class="blog-image">
            <img src="images/Custom-Made-Shirts-by-Janletic-Sports-300x300.jpg" alt="Blog 5">
          </div>
          <div class="blog-content">
            <h5>Guide to Breaking Down the Costs of Custom-Made Shirts</h5>
            <p>In the competitive landscape of custom apparel, particularly in areas like the Pakistan, it’s essential to grasp the different factors that impact the cost of custom-made shirts. Whether you’re a business aiming to produce branded apparel or an individual in search of personalized clothing, this guide will outline the associated costs to help you make informed choices. Fabric […]</p>
            <a href="/Blog5-Post5" class="read-more">Read More</a>
          </div>
        </div>
      </div>
      <!-- Blog 6 -->
      <div class="col-md-4">
        <div class="blog-card">
          <div class="blog-image">
            <img src="images/Polyester-PolyCotton-Cotton-Fabric-Janletic-Sports-300x300.jpg" alt="Blog 6">
          </div>
          <div class="blog-content">
            <h5>Comprehensive Guide to the Polyester and Cotton Fabric</h5>
            <p>Grasping the Blend and Its Advantages: Two names frequently mentioned in discussions about wardrobe fabrics are Polyester and Cotton. Each has distinct properties that make them highly favored in the textile industry. When combined, they create a blend that offers the best of both worlds: durability, comfort, easy maintenance, and versatility. […]</p>
            <a href="/Blog6-Post6" class="read-more">Read More</a>
          </div>
        </div>
      </div>

      <div class="more-blogs-btn">
        <a href="/More-Blogs">More Blogs</a>
      </div>
      </div>

    </div>
  </div>
        @extends('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body> 
</html>
