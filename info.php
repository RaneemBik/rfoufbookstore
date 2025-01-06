<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Checkout</title>
<link rel="stylesheet" href="css/infoCss.css">
</head>
<body>
<div class="row">
  <div class="con">
    <div class="container">
      <form action="infoAction.php" method="POST">
      
        <div class="row">
          <div class="bill">
            <h3>Billing Address</h3>
            <label for="fname" class="fa fa-user"><img src="imgs/user.png" width="20px" height="20px"> Full Name</label>
            <input type="text" id="fname" name="txtName" required>
            <label for="email" class="email"><img src="imgs/email.png" width="17px" height="17px"> Email</label>
            <input type="text" id="email" name="txtemail" required>
            <label for="adr" class="fa fa-address-card-o"><img src="imgs/mapsandflags.png" width="20px" height="20px"> Address</label>
            <input type="text" id="adr" name="txtaddress" required >
            <label for="city" class="fa fa-institution"><img src="imgs/cityscape.png" width="20px" height="20px"> City</label>
            <input type="text" id="city" name="txtcity" required>
            <label for="state"><img src="imgs/usa.png" width="20px" height="20px"> State</label>
            <input type="text" id="state" name="txtstate" required>
          </div>

          <div class="bill">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <img src="imgs/card.png" width="53px" height="53px">
              <img src="imgs/money.png" width="55px" height="55px" class="shop">
              <img src="imgs/creditcard.png" width="55px" height="55px">
              <img src="imgs/visa.png" width="55px" height="55px">
            </div>
            <label for="cname"><img src="imgs/onhand.png" width="20px" height="20px"> Name on Card</label>
            <input type="text" id="cname" name="txtCardName" required>
            <label for="ccnum"><img src="imgs/password.png" width="22px" height="22px"> Credit Card number</label>
            <input type="text" id="ccnum" name="txtCardNumber" required>
            <label for="expyear"><img src="imgs/expired.png" width="17px" height="17px"> Expire Year</label>
            <input type="text" id="expyear" name="txtExpYear" required>
            <label for="cvv"><img src="imgs/cvv.png" width="18px" height="18px"> Card Verification Value</label>
            <input type="text" id="cvv" name="txtCvv" required>
          </div>
        </div>
        <div class="button-container">
        <input type="submit" value="Save" class="btn">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
