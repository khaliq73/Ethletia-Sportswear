
<style>
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

.quote-btn i {
    color: #2DCCEC;
  margin-right: 10px;
  font-size: 1.5rem; /* Increased icon size */
}

.quote-btn:hover {
  background-color: #233E4F;

  
}

/* Media query for responsiveness */
@media (max-width: 768px) {
  .quote-box-content {
    flex-direction: column;
    padding: 20px;
  }
  
  .quote-box-content span {
    margin-bottom: 15px;
    margin-right: 0;
  }
  
  .quote-btn {
    padding: 15px 25px;
    font-size: 1.3rem; /* Slightly smaller font size for mobile */
  }

  .quote-box-content {
    width: 90%; /* For smaller screens */
  }
}



</style>

<div class="fotter">

<!-- Footer Section -->
<footer class="footer">
    
    <div class="footer-quote-box">
        <div class="quote-box-content">
          <span>Request Quote Today!</span>
          <a href="/get-a-quote" class="quote-btn" style="color: #2DCCEC;">
            <i class="bi bi-currency-dollar"></i> GET QUOTE
          </a>
        </div>
      </div>  

    <div class="container">
        <div class="row">
            <!-- Logo and Description -->
            <div class="  logoo logoboxx col-md-4 footer-logo mb-4">
                <img src="{{ asset('images/headerlogo.png') }}" alt="Logo" style="margin-top: -30px">
                <p class="mt-3">Wholesale Sportswear / Team uniforms & Wholesale Fitness Apparel / Activewear manufacturer company from Sialkot, Pakistan. We are Offering Private Label Services with Custom Design, Printing, Embroidery, Cut & Sew, and Packaging.</p>
            </div>

            <!-- Contact Information -->
            <div class="  logoboxx col-md-4 contact-info mb-4">
                <h6>CONTACT INFORMATION</h6>
                <ul class="list-unstyled">
                    <li><i class="bi bi-telephone-fill" style="font-size: 18px; color: white;" ></i> +92 3008119361</li>
                    <br>
                    <li><i class="bi bi-telephone-fill" style="font-size: 18px; color: white;" ></i> +92 3040007819</li>
                    <br>
                    <li><i class="bi bi-envelope-fill" style="font-size: 18px; color: white;" ></i>  sales@ethletia.com </li>
                    <br>
                    <li><i class="bi bi-geo-alt-fill" style="font-size: 18px; color: white;" ></i>  Defence road Al-Hadi Town Ali street, 51310 Sialkot.</li>
                <br>
                </ul>
            </div>

                   <!-- Useful Links -->
                   <div class=" logooo logoboxx col-md-4 useful-links mb-4">
                    <h6>USEFUL LINKS</h6>
                    <ul class="list-unstyled">
                        <li><a href="/Catalogs">Catalogs</a></li>
                        <hr style="margin-top: 5px;">
                        <li><a href="/About-us">About Us</a></li>
                        <hr style="margin-top: 5px;">
                        <li><a href="/Contact-US">Contact Us</a></li>
                        <hr style="margin-top: 5px;">
                        <li><a href="/FAQs">FAQs</a></li>
                        <hr style="margin-top: 5px;">
                        <li><a href="/More-Blogs">Latest Blogs</a></li>
                    </ul>
                </div>
            </div>
    
            <!-- Social Media Icons -->
            <div class="row">
                <div class="col-12 text-center mt-4 social-icons">
                    <a href="https://www.instagram.com/ethletia/profilecard/?igsh=bWU5YTdhejliODJy"><i class="bi bi-instagram" style="font-size: 24px;"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=61567395583204"><i class="bi bi-facebook" style="font-size: 24px;"></i></a>
                    <a href="#"><i class="bi bi-linkedin" style="font-size: 24px;"></i></a>
                    <a href="#"><i class="bi bi-twitter" style="font-size: 24px;"></i></a>
                    <a href="https://wa.me/923008119361"><i class="bi bi-whatsapp" style="font-size: 24px;"></i></a>
                </div>
            </div>
    
            <!-- Footer Bottom -->
            <div class="footer-bottom mt-4">
                <div class="row">
                    <div class="col-md-6 text-md-start">
                        <p>Copyright © 2024 Ethletia Sports. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a href="/Catalogs">Catalogs</a> | <a href="/Privacy-Policy">Privacy Policy</a> | <a href="/Terms-and-Conditions">Terms & Conditions</a> | <a href="/FAQs">FAQs</a>
                    </div>
                </div>
            </div>
    </div>
</footer>
    </div>
 
        @yield('content')
