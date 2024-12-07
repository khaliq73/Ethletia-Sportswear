<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-US</title>
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
    .social-icon:hover {
    color: #2DCCEC !important;
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
  

</style>
<body>
    @include('layouts.navbar')

<div class="bbooxx">
    <img src="images/Janletic-Sports-wear-manufacturer-Pakistan.jpg" class="img-fluid" alt="...">
    <div class="overlay">
      <h1>Contact Us</h1>
    </div>
  </div>
  <br><br>
  <br><br>
  <br><br>
  <div class="container">
    <div class="row">
     <!-- Left Box -->
<div class="col-md-6 d-flex flex-column justify-content-center">
    <!-- Contact Us Header -->
    <h3 class=" mb-3" style="color:#2DCCEC;" >CONTACT US</h3>
    <h1 class="fw-bold mb-4">GET IN TOUCH !!</h1>
    <p class="mb-4">Feel free to contact us if you require any assistance. Do you need a quick hand to start? Get a free consultation with our experts.</p>
    
    <!-- Contact Details Section -->
    <div class="mb-4">
      <div class="d-flex align-items-start mb-3">
        <i class="bi bi-envelope-fill fs-2 me-3" style="color: #2DCCEC;"></i>
        <div>
          <strong class="d-block">EMAIL ADDRESS</strong>
          <span>sales@ethletia.com</span>
        </div>
      </div>

      <div class="d-flex align-items-start mb-3">
        <i class="bi bi-whatsapp fs-2 me-3" style="color: #2DCCEC;"></i>
        <div>
          <strong class="d-block">WHATSAPP</strong>
          <span>+92 3008119361</span>
        </div>
      </div>

      <div class="d-flex align-items-start mb-3">
        <i class="bi bi-geo-alt-fill fs-2 me-3" style="color: #2DCCEC;"></i>
        <div>
          <strong class="d-block">LOCATION</strong>
          <span>Defence road Al-Hadi Town Ali street, 51310 Sialkot.</span>
        </div>
      </div>
    </div>

    <!-- Social Media Icons -->
    <div class="d-flex">
      <a href="https://www.instagram.com/ethletia/profilecard/?igsh=bWU5YTdhejliODJy" class="text-dark me-3 fs-4 social-icon"><i class="bi bi-instagram"></i></a>
      <a href="https://www.facebook.com/profile.php?id=61567395583204" class="text-dark me-3 fs-4 social-icon"><i class="bi bi-facebook"></i></a>
      <a href="#" class="text-dark me-3 fs-4 social-icon"><i class="bi bi-linkedin"></i></a>
      <a href="#" class="text-dark me-3 fs-4 social-icon"><i class="bi bi-pinterest"></i></a>
      <a href="https://wa.me/923008119361" class="text-dark fs-4 social-icon"><i class="bi bi-whatsapp"></i></a>
    </div>
  </div>

      <!-- Right Box (Your Form) -->
      <div class="col-md-6">
        <!-- Form section will be here, which you already have -->

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
        <textarea name="message" class="form-control" rows="4" placeholder="Enter Your Message" required></textarea>
    </div>
    <div class="button-wrapper">
        <button type="submit" class="btn btn-submit">SUBMIT MESSAGE</button>
    </div>
</form>

        </div>

      </div>
    </div>
  </div>

  <br><br>
  <br><br>

<br> <br>
@extends('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>