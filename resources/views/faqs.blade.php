<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
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




    .contact-box {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
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
            border: 1px solid #ff0000;
            border-radius: 5px;
            margin-right: 15px;
        }
        .icon-boxx i {
            font-size: 24px;
            color: #ff0000;
        }
        .contact-info a {
            font-size: 17px;
            font-weight: bold;
            color: #1b1e25;
            margin: 0;
           text-decoration: none;      
          }
          .contact-info a:hover {
            color: #ff0000;
        }

        .contact-info p {
            font-size: 17px;
            margin: 0;
            color: #555555;
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


        .faq-title {
            font-weight: bold;
            font-size: 2rem;
            color: #0d1b2a;
        }
        .faq-header {
            border-bottom: 3px solid red;
            display: inline-block;
            padding-bottom: 5px;}
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
        .btn-submit:hover{
            background-color: white;
            color: #2DCCEC;
            border: 1px solid #2DCCEC;
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
       
</style>
<body>
    @include('layouts.navbar')
    <div class="bbooxx">
        <img src="images/Janletic-Sports-wear-manufacturer-Pakistan.jpg" class="img-fluid" alt="...">
        <div class="overlay">
          <h1>Frequently Asked Questions</h1>
        </div>
      </div>

      <div class="container mt-5">
        <div class="row">
            <!-- FAQ Section -->
            <div class="col-md-6">
                <div class="mb-4">
                    <div class="faq-header">Questions / Answers</div>
                </div>
                <h2 class="faq-title mb-3">Explore Commonly Asked Questions</h2>
                <p>We’ve provided answers to some frequently asked questions. We hope this helps, but if you still have queries, feel free to contact us via the form. One of our representatives will get in touch with you shortly.</p>
            
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
                        <p>The production time depends on the order size and specifications usually we take three weeks.</p>
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
            
                <div class="faq-item">
                    <h6 data-toggle="collapse" data-target="#faq6" aria-expanded="false" aria-controls="#faq6" class="collapsed">
                        Do I Need To Submit Designs Before Ordering For A Team?
                        <span class="arrow">▼</span>
                    </h6>
                    <div id="faq6" class="collapse">
                        <p>No, our design team can create custom team orders for you at no extra charge.</p>
                    </div>
                </div>
            
                <div class="faq-item">
                    <h6 data-toggle="collapse" data-target="#faq7" aria-expanded="false" aria-controls="#faq7" class="collapsed">
                        Can You Match Existing Colors In My Design Or Garment?
                        <span class="arrow">▼</span>
                    </h6>
                    <div id="faq7" class="collapse">
                        <p>We strive to match colors exactly, though minor differences in shades may occur.</p>
                    </div>
                </div>
            
                <div class="faq-item">
                    <h6 data-toggle="collapse" data-target="#faq8" aria-expanded="false" aria-controls="#faq8" class="collapsed">
                        Do You Offer Both CMYK And RGB Printing?
                        <span class="arrow">▼</span>
                    </h6>
                    <div id="faq8" class="collapse">
                        <p>We typically print in CMYK but can accommodate RGB at an additional cost per unit.</p>
                    </div>
                </div>
            
                <div class="faq-item">
                    <h6 data-toggle="collapse" data-target="#faq9" aria-expanded="false" aria-controls="#faq9" class="collapsed">
                        Is There An Extra Cost For Adding Player Names & Numbers On Jerseys?
                        <span class="arrow">▼</span>
                    </h6>
                    <div id="faq9" class="collapse">
                        <p>No, we don’t charge extra for sublimated player names, numbers, or sponsor logos.</p>
                    </div>
                </div>
            
                <div class="faq-item">
                    <h6 data-toggle="collapse" data-target="#faq10" aria-expanded="false" aria-controls="#faq10" class="collapsed">
                        What File Formats Do You Accept For Logos/Graphics?
                        <span class="arrow">▼</span>
                    </h6>
                    <div id="faq10" class="collapse">
                        <p>We accept logo files in PDF, EPS, AI, and CDR formats.</p>
                    </div>
                </div>
            </div>
            
  
            <!-- Contact Form Section -->
            <div class="col-md-6">
                <div class="contact-form" >
                    <div class="contact-header">CONTACT US</div>
                    <form method="POST" action="{{ route('contact.store') }}" >
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
                            <input type="text" name="contact_number"class="form-control" placeholder="Your Contact Number*" required>
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

@extends('layouts.footer')

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>