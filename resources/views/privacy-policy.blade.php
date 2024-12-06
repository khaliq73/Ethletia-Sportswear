<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy-Policy</title>
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
    .privacy-section {
            width: 70%;
            margin: 0 auto;
        }
        .privacy-section h1 {
            font-weight: bolder;
            color: black;
            font-size: 2.5rem;
        }
        .privacy-section p,
        .privacy-section a {
            color: #333;
            line-height: 1.6;
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
</head>
<body>
    @include('layouts.navbar')

    <div class="bbooxx">
        <img src="images/Janletic-Sports-wear-manufacturer-Pakistan.jpg" class="img-fluid" alt="...">
        <div class="overlay">
          <h1>Privacy Policy</h1>
        </div>
      </div>

      <div class="container my-5 privacy-section">
        <h1>ABOUT US</h1>
        <p>Our website URL is: >https://ethletiasports.com.</p>
    
        <h1 class="mt-4">USER COMMENTS</h1>
        <p>When users post comments, we collect the information they share in the comment form, along with the user's IP address and browser type to assist in detecting spam.</p>
        <p>An anonymized string, created from your email (also called a hash), may be sent to the Gravatar service to check if you are using it. You can view the Gravatar privacy policy here: <a href="https://automattic.com/privacy/" target="_blank">https://automattic.com/privacy/</a>. Once approved, your profile picture will be visible to the public along with your comment.</p>
    
        <h1 class="mt-4">MEDIA</h1>
        <p>If you upload images to our site, please make sure they don’t contain embedded location data (EXIF GPS), as other visitors could download and access this data.</p>
    
        <h1 class="mt-4">COOKIES</h1>
        <p>When you comment on our site, you may opt to save your name, email, and website in cookies. This saves you from re-entering the details on future comments. These cookies last for one year.</p>
        <p>If you visit our login page, a temporary cookie will be set to check if your browser accepts cookies. This cookie contains no personal data and will be deleted when you close your browser.</p>
        <p>When logging in, multiple cookies are set to store your login details and screen preferences. Login cookies last for two days, while screen options cookies remain for a year. If you select "Remember Me," your login remains active for two weeks. Logging out removes these login cookies.</p>
        <p>If you edit or publish an article, an extra cookie will be stored in your browser. This cookie holds no personal data and just indicates the post ID of the article you edited. It expires after one day.</p>
    
        <h1 class="mt-4">EMBEDDED CONTENT FROM OTHER WEBSITES</h1>
        <p>Some articles on our site might include embedded content (like videos, images, or articles). Embedded content from other websites behaves as if the user has visited the other site directly.</p>
        <p>These websites could collect information about you, use cookies, insert additional third-party tracking, and monitor your interaction with the embedded content, especially if you have an account and are logged into that site.</p>
    
        <h1 class="mt-4">WHO WE SHARE YOUR DATA WITH</h1>
        <p>If you request a password reset, your IP address will be included in the reset email.</p>
    
        <h1 class="mt-4">HOW LONG WE RETAIN YOUR DATA</h1>
        <p>If you leave a comment, both the comment and its metadata will be retained indefinitely, allowing us to recognize and automatically approve any follow-up comments without sending them to a moderation queue.</p>
        <p>For users who register on our website (if any), we store the personal data they provide in their profile. Users can view, edit, or delete their personal data at any time (though username changes are not allowed). Site admins can also access and edit that information.</p>
    
        <h1 class="mt-4">WHAT RIGHTS YOU HAVE OVER YOUR DATA</h1>
        <p>If you have an account on this site, or have left comments, you can request a file of the personal data we hold about you, including any data you have given us. You may also ask us to erase any personal data we hold. This does not include any data we are required to retain for administrative, legal, or security reasons.</p>
    
        <h1 class="mt-4">WHERE WE SEND YOUR DATA</h1>
        <p>Visitor comments may be reviewed through an automated spam detection system.</p>
    </div>
    
      
    <br> <br>
    @extends('layouts.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"></script>
</body>
</html>
