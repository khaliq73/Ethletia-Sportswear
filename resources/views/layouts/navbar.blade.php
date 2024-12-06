 <style>
      .header {
            background-color: #233E4F;
            padding: 10px 0;
            color: #fff;
        }
        .header .icon {
            color: #2DCCEC;
            font-size: 1.5rem;
        }
        .header-text {
            display: flex;
            align-items: center;
        }
        .header-text .text-content {
            margin-left: 10px;
            display: flex;
          
            flex-direction: column;
        }
        .text-content span:hover{
            color: #2DCCEC;
        }
        .boxxx{
    
    margin-top: 3px;
    width: 50px; /* Adjust the size as needed */
    height: 50px; /* Adjust the size as needed */
    border: 1px solid #2DCCEC; /* Border color */
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    border-radius: 5px; /* Adjust the border radius if needed */
}
        .text-small {
            font-size: 0.8rem;
        }
        .navbar {
            background-color: #2DCCEC;

        }
        .navbar-nav{
      gap: 5px;
        margin-left: 20px;
        
        
        }
        .navbar-nav .nav-link {
            
            color: #fff;
            font-weight: bold;
            padding: 15px 15px ;
        }
        .navbar-nav .nav-link:hover {
            color: #000;
        }
        .get-quote-btn {
          margin-left: 20px;
            background-color: #fff;
            text-decoration: none;
            color: #2DCCEC;
            font-weight: bold;
            border: 2px solid #2DCCEC;
            padding: 5px 15px;
            border-radius: 5px;
        }
        .get-quote-btn:hover {
            background-color: #2DCCEC;
            color: white;
            border: 1px solid white;
        
          }

        
        .social-iconsss a {
            color: #fff;
        font-size: 1.5rem;
            margin-left: 10px;
        }
        .social-iconsss a:hover {
            color: #000;
        }

        /* Media Query for responsiveness below 991px */
        @media (max-width: 991px) {
            .header {
                text-align: center;
            }
            .header .row {
                flex-direction: column;
            }
            .header .col-md-3 {
                display: none;
            }
       
        }
        @media (max-width: 1200px){

          .navbar-nav{
       font-size: 14px;
        margin-left: 10px;
        
        }

        .get-quote-btn {
          margin-left: 20px;
            background-color: #fff;
            text-decoration: none;
            color: #2DCCEC;
            font-weight: bold;
            border: 2px solid #2DCCEC;
            padding: 1px 15px;
            border-radius: 5px;
        }
        }
 </style>
 
 
 <!-- Header -->
  <div class="container-fluid header">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-md-3 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('images/headerlogo.png') }}" alt="Logo" class="img-fluid" style="max-height: 150px;  padding-top: 20px; padding-bottom: 20px;">
                    <!-- <span class="ms-2 fw-bold">JANLETIC SPORTS</span> -->
                </div>
                <div class="col-md-3 header-text">
                    <div class="boxxx">
                      <i class="bi bi-whatsapp icon"></i>
                    </div>
                      <div class="text-content">
                        <a href="https://wa.me/923008119361" style="color: white; text-decoration: none;">
                            <span>+92 3008119361</span>
                        </a>
                       
                      </div>
                  </div>
                  <div class="col-md-3 header-text">
                    <div class="boxxx">
                      <i class="bi bi-envelope icon"></i>
                    </div>
                      <div class="text-content">
                        <a href="mailto:sales@ethletia.com" style="color: white; text-decoration: none;">
                            <span>sales@ethletia.com</span>
                        </a>
                         
                      </div>
                  </div>
                <div class="col-md-3 header-text">
                  <div class="boxxx">
                    <i class="bi bi-geo-alt icon"></i>
                  </div>
                    <div class="text-content">
                        <a href="https://maps.app.goo.gl/s2wckYBQKNPozPX96" target="_blank" style="color: white; text-decoration: none;">
                            <span>Sialkot, Pakistan</span>
                        </a>
                        
                        
                        <small class="text-small">(Worldwide Delivery)</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="/get-a-quote" class="get-quote-btn d-lg-none ms-auto">GET QUOTE</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Sportswear">SPORTSWEAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Activewear">ACTIVEWEAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Casual-wear">CASUAL WEAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Gloves">GLOVES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Accessories">ACCESSORIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/FAQs">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/About-us">ABOUT US</a>
                    </li>
                </ul>
                <div class="social-iconsss d-flex align-items-center ">
                    <a href="https://www.facebook.com/profile.php?id=61567395583204"><i class="bi bi-facebook"><img src="" alt="" height="25px"></i></a>
                    <a href=" https://www.instagram.com/ethletia/profilecard/?igsh=bWU5YTdhejliODJy "><i class="bi bi-instagram"><img src="" alt="" height="25px"></i></a>
                    <a href="#"><i class="bi bi-twitter"><img src="" alt="" height="25px"></i></a>
                    <a href=" https://wa.me/923008119361 "><i class="bi bi-whatsapp"><img src="" alt="" height="25px"></i></a>
                </div>
            </div>
            <a href="/get-a-quote" class="get-quote-btn d-none d-lg-block">GET QUOTE</a>
        </div>
    </nav>
