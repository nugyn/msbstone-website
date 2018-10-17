<?php
  session_start();
  include_once('tools.php');

  topModule('Assignment 3');

if(isset($_POST['checkout']))
{
  $_SESSION["firstname"] = $_POST["firstname"];
  $_SESSION["lastname"] = $_POST["middlename"];
  $_SESSION["firstname"] = $_POST["lastname"];
  $_SESSION["firstname"] = $_POST["email"];
  $_SESSION["firstname"] = $_POST["address"];
  $_SESSION["firstname"] = $_POST["city"];
  $_SESSION["firstname"] = $_POST["state"];
  $_SESSION["zip"] = $_POST["zip"];
  $_SESSION["number"] = $_POST["number"];
  header("Location: receipt.php");

}


 ?>

    <div class ="layout">
      <section class="grid">
        <article class="grid-content">
          <div class="row">
    <div class="col-75">
      <div class="container">
        <form name = "form" action="/action_page.php" method="post">

          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname"><i class="fa fa-user"></i> First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Enter in Firstname" required>
              <label for="fname"><i class="fa fa-user"></i> Middle Name</label>
              <input type="text" id="fname" name="middlename" placeholder="Enter in Middlename">
              <label for="fname"><i class="fa fa-user"></i> Last Name</label>
              <input type="text" id="fname" name="lastname" placeholder="Enter in Firstname" required>
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="example@example.com" required>
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" placeholder="123 Street St" required>
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" id="city" name="city" placeholder="City" required>

              <div class="row">
                <div class="col-50">
                  <label for="state">State</label>
                  <input type="text" id="state" name="state" placeholder="State" required>
                  <select id=state required>
                    <option value="VIC"> Victoria </option>
                    <option value="NSW"> New South Wales </option>
                    <option value="QLD"> Queensland </option>
                    <option value="NT"> Northern Territory </option>
                    <option value="WA"> Western Australia</option>
                    <option value="SA"> South Australia</option>
                  </select>
                </div>
                <div class="col-50">
                  <label for="zip">Postcode</label>
                  <input type="text" id="postcode" name="postcode" placeholder="0000" required>
                </div>
              </div>
            </div>



            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              </div>





              <label for="cname">Name on Card <abbr title="Required">*</abbr></label>
              <input type="text" id="cname" name="cardname" placeholder="Cardholder Name" required>

            <label for="ccNum">Card Number <abbr title="Required">*</abbr></label>
            <input type="text" name="cardnumber" value="123" onchange= "validateCardNumber(document.form.cardnumber)">

          <script>
          function validateCardNumber(val)
          {
            var cardno = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
            if(val.value.match(cardno))
                  {
                return true;
                  }
                else
                  {
                  alert("Not a valid Visa credit card number!");
                  return false;
                  }
          }
          </script>

              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="Month" required>

              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="2018">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352">
                </div>
              </div>
            </div>

          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </label>
          <input type="submit" value="Continue to checkout" class="btn">
        </form>

      </div>
    </div>

    <div class="col-25">
      <div class="container">
        <h4>Cart
          <span class="price" style="color:black">
            <i class="fa fa-shopping-cart"></i>
            <b>4</b>
          </span>
        </h4>
        <p><a href="#">Product 1</a> <span class="price">$15</span></p>
        <p><a href="#">Product 2</a> <span class="price">$5</span></p>
        <p><a href="#">Product 3</a> <span class="price">$8</span></p>
        <p><a href="#">Product 4</a> <span class="price">$2</span></p>
        <hr>
        <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
      </div>
    </div>
  </div>
      </article>
      </section>


  </div>


  <?php
    endModule();

  ?>
