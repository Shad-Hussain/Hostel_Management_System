<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dining Payment Checkout Form</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
	<link rel="stylesheet" href="../css/pay.css">

</head>
<body>
	

  <div class="wrapper">
    <div class="payment">
      <div class="payment-logo">
        <p>p</p>
      </div>
      
      
      <h2>Payment Gateway</h2>
      <div class="form">
        <div class="card space icon-relative">
          <label class="label">Card holder:</label>
          <input type="text" class="input" placeholder="Card Holder Name">
          <i class="fas fa-user"></i>
        </div>
        <div class="card space icon-relative">
          <label class="label">Card number:</label>
          <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="XXXX XXXX XXXX XXXX">
          <i class="far fa-credit-card"></i>
        </div>
        <div class="card-grp space">
          <div class="card-item icon-relative">
            <label class="label">Expiry date:</label>
            <input type="text" name="expiry-data" class="input" data-mask="00 / 00"  placeholder="09 / 11">
            <i class="far fa-calendar-alt"></i>
          </div>
          <div class="card-item icon-relative">
            <label class="label">CVC/CVV:</label>
            <input type="password" class="input" data-mask="000" placeholder="XXX">
            <i class="fas fa-lock"></i>
          </div>
        </div>
          
        <div class="btn">
          Pay
        </div> 
        <div class="btn">
        <a style="color: white;" href="../html/payment.html" > Cancel</a>
</div>

      </div>
    </div>
  </div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</body>
</html>