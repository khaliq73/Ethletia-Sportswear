<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms-and-Condition</title>
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
    .terms-container {
            width: 70%;
            margin: auto;
        }
        .terms-container h1 {
            font-weight: bolder;
            color: black;
        }
        .terms-container p, .terms-container li {
         
            color: #333;
            font-size: 1.1em;
        }
        .terms-container .content-section {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    @include('layouts.navbar')
    <div class="bbooxx">
        <img src="images/Janletic-Sports-wear-manufacturer-Pakistan.jpg" class="img-fluid" alt="...">
        <div class="overlay">
          <h1>Terms and Conditions</h1>
        </div>
      </div>
      <div class="container mt-5 terms-container">
        <div class="content-section">
            <h1>1. Payment Methods:</h1>
            <ul>
                <li>We accept the following payment methods:</li>
                <li>Bank Wire Transfer (Requires a valid business bank account)</li>
                <li>Banker's Cheque (For approved local customers only)</li>
                <li>Western Union</li>
                <li>MoneyGram</li>
                <li>Xoom</li>
                <li>Other hassle-free payment services</li>
            </ul>
        </div>
        <div class="content-section">
            <h1>2. Currency:</h1>
            <p>All prices are quoted in USD (United States Dollars) unless another currency is specifically mentioned.</p>
        </div>
        <div class="content-section">
            <h1>3. Minimum Order Quantity (MOQ):</h1>
            <p>Our minimum order quantity is 100 pieces per design and color. We do not offer single-piece orders.</p>
        </div>
        <div class="content-section">
            <h1>4. Pricing and Quotes:</h1>
            <p>Prices are subject to change without prior notice, but customer quotes will be honored for 30 days.</p>
        </div>
        <div class="content-section">
            <h1>5. Sample and Design Approval:</h1>
            <ul>
                <li>Before production, a sample will be created for your review and approval.</li>
                <li>Production will begin only after receiving your approval of the sample.</li>
                <li>Please note that a non-refundable advance payment will be required for all samples before the sample is provided.</li>
            </ul>
        </div>
        <div class="content-section">
            <h1>6. Payment Schedule:</h1>
            <ul>
                <li>We require a 50% deposit of the total order value before production begins.</li>
                <li>The remaining 50% balance must be paid upon completion of the order but before shipment.</li>
                <li>For established customers with a proven payment history, alternative payment terms may be negotiated on a case-by-case basis.</li>
            </ul>
        </div>
        <div class="content-section">
            <h1>7. Payment Due Date:</h1>
            <p>Payment is due within 15 days from the date of the deposit invoice and within 15 days from the date of the final invoice for the balance payment.</p>
        </div>
        <div class="content-section">
            <h1>8. Late Payment:</h1>
            <ul>
                <li>Payment delays may affect the production and delivery schedule of future orders.</li>
                <li>Timely payment is essential to ensure your orders’ smooth processing and delivery.</li>
            </ul>
        </div>
        <div class="content-section">
            <h1>9. Order Cancellation:</h1>
            <ul>
                <li>Orders can be canceled without penalty only if done so within three days of placing the order.</li>
                <li>Cancellation requests received after the production process has started may be subject to additional charges.</li>
            </ul>
        </div>
        <div class="content-section">
            <h1>10. Delivery and Shipping:</h1>
            <ul>
                <li>Shipping costs will be calculated and added to the final invoice.</li>
                <li>We are committed to arranging secure and reliable delivery services for your order. Our goal is to ensure your products’ safe and timely delivery to the specified destination. If you have any specific shipping preferences or requirements, please communicate them to us, and we will do our best to accommodate your needs.</li>
            </ul>
        </div>
        <div class="content-section">
            <h1>11. Taxes and Duties:</h1>
            <p>Unless otherwise specified, all prices quoted do not include taxes and duties. Customers are responsible for any applicable taxes, customs duties, or other charges imposed by their local authorities or customs agencies related to purchasing and importing our products. Please consult with your local tax authorities or customs agency for information on any applicable charges.</p>
        </div>
        <div class="content-section">
            <h1>12. Credit Terms:</h1>
            <p>We do not offer credit terms for payment. All orders must be prepaid according to the payment schedule outlined in these payment terms. Payment is required before production begins and before shipment. We do not provide products on credit or extend credit terms to customers.</p>
        </div>
        <div class="content-section">
            <h1>13. Returns and Refunds:</h1>
            <ul>
                <li>Returns are only accepted for defective or damaged products.</li>
                <li>Refunds will be issued for the returned items, or replacements will be provided, per our Return Policy.</li>
            </ul>
            <p>By placing an order with Janletic Sports, you agree to abide by these terms and conditions.</p>
            <p>Please do not hesitate to email us at <a href="mailto:sales@ethletia.com">sales@ethletia.com</a> if you have any questions or require further clarification regarding our payment terms.</p>
        </div>
    </div>
    <br> <br>
    @extends('layouts.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/js/all.min.js"></script>
</body>
</html>
