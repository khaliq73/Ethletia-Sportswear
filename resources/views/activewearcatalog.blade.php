<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activewear Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="book.js" defer></script>
</head>
<style>
   /* body div container */
   .boody-container {
 

      height: 80vh;
      margin-top: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: sans-serif;
     
   }

   /*book*/
   .book {
      position: relative;
      width: 400px;
      height: 600px;
      transition: transform 0.5s;
   }

   .paper {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      perspective: 1500px;
   }

   .front, .back {
      background-color: white;
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      transform-origin: left;
      transition: transform 0.5s;
   }

   .front {
      z-index: 1;
      backface-visibility: hidden;
      border-left: 3px solid powderblue;
   }

   .back {
      z-index: 0;
   }

   .front-content, .back-content {
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
   }

   .back-content {
      transform: rotateY(180deg);
   }

   /* paper flip effect */
   .flipped .front, .flipped .back {
      transform: rotateY(-180deg);
   }

   /* controller button */
   button {
      border: none;
      background-color: transparent;
      cursor: pointer;
      margin: 80px;
      transition: transform 0.5s;
   }

   button:focus {
      outline: none;
   }

   button:hover {
      color: #636363;
   }

   .fas {
      font-size: 50px;
   }

   /* paper stack order */
   #p1 {
      z-index: 3;
   }

   #p2 {
      z-index: 2;
   }

   #p3 {
      z-index: 1;
   }

   @media screen and (max-width: 1000px) {
      .book {
         width: 300px;
         height: 550px;
      }

      button {
         margin: 30px;
      }
   }

   @media screen and (max-width: 760px) {
      .book {
         width: 200px;
         height: 400px;
      }

      button {
         margin: 1px;
      }
   }

   @media screen and (max-width: 550px) {
      .book {
         width: 150px;
         height: 300px;
      }

      button {
         margin: 1px;
         font-size: 1px;
      }

      #prev-btn {
         margin-left: 10px;
         font-size: 5px;
      }
   }

   @media screen and (max-width: 400px) {
      .book {
         width: 120px;
         height: 200px;
      }
   }


   .body-container{

font-family: Arial, sans-serif;
background-color: white;
margin: 0;
padding: 20px;
display: flex;
flex-wrap: wrap;
gap: 20px;
justify-content: center;
align-items: center;
min-height: 80vh;

}
.section {

background-color: white;
padding: 20px;
border-radius: 8px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
width: 450px;
}
.catalog-container {
display: flex;
flex-direction: column;
gap: 20px;
}
h2 {
background-color: #2DCCEC;
color: white;
padding: 10px;
text-align: center;
margin: 0 0 20px 0;
font-size: 18px;
border-radius: 5px;
}
form input, form textarea {
width: 100%;
padding: 10px;
margin-bottom: 15px;
border: 1px solid #ccc;
border-radius: 5px;
}
textarea {
height: 120px;
resize: none;
}

.bttn {
text-align: center;
}

.submit-btn {
width: 40%;
padding: 10px;
background-color: #2DCCEC;
border: none;
color: white;
font-size: 13px;
border-radius: 5px;
font-weight: bold;
cursor: pointer;
}

.submit-btn:hover {
background-color: white;
color: #2DCCEC;
border: 1px solid #2DCCEC;
}
.frm a{
  text-decoration: none;
  color: #666;
}

.frm a:hover{
    color: #2DCCEC;
}
       .frm  ul {
             list-style: none;          
             padding-left: 20px;
            color: #666;
        }
        .frm li {
            list-style: none;
            margin-bottom: 10px;
        }
@media (max-width: 768px) {
body {
    flex-direction: column;
    padding: 10px;
}
}
@media (max-width: 415px) {
.sect{
width: 350px;
}
}
@media (max-width: 442px) {

.submit-btn {
width: 50%;
padding: 10px;
background-color: #2DCCEC;
border: none;
color: white;
font-size: 13px;
border-radius: 5px;
font-weight: bold;
cursor: pointer;
}

}

@media (max-width: 373px) {

.submit-btn {
width: 50%;
padding: 10px;
background-color: #2DCCEC;
border: none;
color: white;
font-size: 11px;
border-radius: 5px;
font-weight: bold;
cursor: pointer;
}

}


.fotter {
            background-color: #233E4F;
            color: #fff;
            
        }
        .roww{
            width: 100%;
            margin-left: 40px;
            
        }
        .footer {
            background-color: #233E4F;
            padding: 40px 0;
            box-shadow: 0 -10px 35px rgba(10, 1, 65, 0.6); /* Add this line for box shadow */
        }
        .footer h6 {
            font-weight: bold;
            color: #fff;
        }
        .footer a {
            color: #9ba0ab;
            text-decoration: none;
        }

        .footer a:hover {
            color: #fff;
        }
        .footer .footer-logo img {
            max-width: 300px;
        }
        .footer .social-icons a {
            margin-right: 10px;
            font-size: 20px;
        }
        .footer .social-icons a:hover {
            color: #2DCCEC;
        }
        .footer-bottom {
            border-top: 1px solid #9ba0ab;
            padding-top: 20px;
            margin-top: 200px;
            
            text-align: center;
        }
        .logoboxx{
        
            
            margin-top: 150px;
          text-align: center;
          align-items: center;
        }
      

        /* Media Queries */
        @media (max-width: 991px) {
            .footer .footer-logo, .footer .contact-info, .footer .useful-links {
                text-align: center;
                margin-bottom: 20px;
            }
            .logoboxx {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .footer .footer-logo img {
                max-width: 200px;
            }
        }

        @media (max-width: 786px) {
            .footer .footer-logo, .footer .contact-info, .footer .useful-links {
                text-align: center;
                margin-bottom: 20px;
            }
            .footer .footer-logo, .footer .contact-info, .footer .useful-links {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .footer .footer-logo img {
                max-width: 200px;
            } 
            .logoboxx{
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-top: 10px;
            }
            .footer .footer-logo img {
                max-width: 200px;
            }
            .catalogg{
              margin-left: -90px;
        
            }
              

            .copyrightt{
             margin-left: -90px;
            }
        }

        
        @media (max-width: 520px){

.catalogg {
  
 font-size: 14px;
}
.copyrightt{
 font-size: 14px;
}
}

@media (max-width: 430px){

.catalogg {

font-size: 12px;
}
.copyrightt{
font-size: 12px;
}
}


@media (max-width: 380px){

.catalogg {

font-size: 11px;
}
.copyrightt{
font-size: 12px;
}
}

@media (max-width: 310px){

.catalogg {

font-size: 10px;
}
.copyrightt{
font-size: 11px;
}
}

.footer-quote-box {
 /* Dark background */
  padding: 20px 0;
  text-align: center;
}

.quote-box-content {
  display: inline-flex;
  align-items: center;
  background-color: #2DCCEC; /* Updated red color */
  padding: 30px 50px; /* Increased padding for larger height */
  border-radius: 10px; /* Border radius reduced to 10px */
  font-family: Arial, sans-serif;
  font-size: 2rem; /* Significantly increased font size for larger text */
  font-weight: bold;
  color: white;
  width: 80%; /* Width kept at 80% */
  justify-content: space-between;
}

.quote-box-content span {
    
  
  font-size: 40px;
  font-weight: bold;
}

/* Button inside the quote box */
.quote-btn {
  background-color: white;
  color: #2DCCEC;
  border-radius: 10px; /* Border radius reduced to 10px */
  padding: 20px 35px; /* Increased padding for bigger button and height */
  text-decoration: none;
  font-weight: bold;
  font-size: 1.5rem; /* Increased font size for button text */
  display: inline-flex;
  align-items: center;
}
</style>
<body>
  @include('layouts.navbar')
<br><br> 

<div class="boody-container">
    <!-- Button with Left Arrow -->
    <button id="prev-btn">
      <i class="fas fa-arrow-circle-left"></i>
    </button>

    <!-- book -->
    <div id="book" class="book">
       <!-- page 1 -->
       <div id="p1" class="paper">
          <div class="front">
            <div id="f1" class="front-content">
              <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">
            </div>
          </div>
          <div class="back">
            <div id="b1" class="back-content">
              <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">
            </div>
          </div>
       </div>

       <!-- page 2 -->
       <div id="p2" class="paper">
          <div class="front">
            <div id="f2" class="front-content">
              <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">
            </div>
          </div>
          <div class="back">
            <div id="b2" class="back-content">
              <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">
            </div>
          </div>
       </div>
       <!-- page 3 -->
       <div id="p3" class="paper">
          <div class="front">
            <div id="f3" class="front-content">
              <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">
            </div>
          </div>
          <div class="back">
            <div id="b3" class="back-content">
              <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">
            </div>
          </div>
       </div>

       <div id="p4" class="paper">
          <div class="front">
            <div id="f4" class="front-content">
              <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">  
            </div>
          </div>
          <div class="back">
            <div id="b4" class="back-content">
              <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">
            </div>
          </div>
       </div>

       <div id="p5" class="paper">
        <div class="front">
          <div id="f5" class="front-content">
            <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">  
          </div>
        </div>
        <div class="back">
          <div id="b5" class="back-content">
            <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">
          </div>
        </div>
     </div>

     <div id="p6" class="paper">
        <div class="front">
          <div id="f6" class="front-content">
            <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">  
          </div>
        </div>
        <div class="back">
          <div id="b6" class="back-content">
            <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">
          </div>
        </div>
     </div>

     <div id="p7" class="paper">
        <div class="front">
          <div id="f7" class="front-content">
            <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">  
          </div>
        </div>
        <div class="back">
          <div id="b7" class="back-content">
            <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">
          </div>
        </div>
     </div>

     <div id="p8" class="paper">
        <div class="front">
          <div id="f8" class="front-content">
            <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">  
          </div>
        </div>
        <div class="back">
          <div id="b8" class="back-content">
            <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">
          </div>
        </div>
     </div>

     <div id="p9" class="paper">
        <div class="front">
          <div id="f9" class="front-content">
            <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">  
          </div>
        </div>
        <div class="back">
          <div id="b9" class="back-content">
            <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">
          </div>
        </div>
     </div>
     <div id="p10" class="paper">
        <div class="front">
          <div id="f10" class="front-content">
            <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">  
          </div>
        </div>
        <div class="back">
          <div id="b10" class="back-content">
            <img src="images/Activewear-Janletic-Sports.jpg" style="height: 100%;" alt="">
          </div>
        </div>
     </div>

    </div>
    <!-- Button with Right Arrow -->
    <button id="next-btn">
      <i class="fas fa-arrow-circle-right"></i>
    </button>
  </div>
<br><br>
  <div class="body-container">

    <!-- Contact Us Section -->
    <div class="section">
        <h2>Contact Us</h2>
        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <input type="text" name="name" placeholder="Your Name*" required>
            <input type="email" name="email" placeholder="Your Email*" required>
            <input type="text" name="country" placeholder="Your Country*" required>
            <input type="text" name="contact_number" placeholder="Your Contact Number*" required>
            <textarea name="message" placeholder="Enter Your Message" required></textarea>
            <div class="bttn">
            <button type="submit" class="submit-btn">SUBMIT MESSAGE</button>
            </div>
        </form>

    </div>
    <!-- Catalog and Categories Container -->
    <div class="catalog-container">
        <!-- Catalog Section -->
        <div class="section  sect">
            <h2>Catalogs</h2>
            <form  class="frm">
                <ul>
                  <a href="/SportswearCatalog"><li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;" ></i>Sportswear Catalog</li></a>
                  <a href="/ActivewearCatalog">  <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;" ></i>Activewear Catalog</li></a>
                  <a href="/Casual-wear">   <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;" ></i>Casual wear Catalog</li></a>
                    <a href="/Gloves">  <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;" ></i>Gloves Catalog</li></a>
                    <a href="/Accessories">   <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;" ></i>Accessories Catalog</li></a>
                </ul>
            </form>
        </div>

        <!-- Other Categories Section -->
        <div class="section sect">
            <h2>Other Categories</h2>
            <form class="frm">
                <ul>
                    <a href="/Sportswear">  <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;" ></i>Sportwear</li></a>
                    <a href="/Activewear">  <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;" ></i>Activewear</li></a>
                    <a href="/Casual-wear">  <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;" ></i>Casual wear</li></a>
                    <a href="/Gloves"> <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;" ></i>Gloves</li></a>
                    <a href="/Accessories">      <li><i class="bi bi-arrow-right-circle-fill" style="font-size: 15px; margin-right: 10px;" ></i>Accessories</li></a>
                </ul>
            </form>
        </div>
    </div>
    </div>

    <br>
    @extends('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>