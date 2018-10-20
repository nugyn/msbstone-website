

<?php
  session_start();
  include_once('tools.php');
  error_reporting(0);


 ?>
 <?php
// define variables and set to empty values
$nameErr = $emailErr = $addressErr = $cityErr  = $stateErr = $postcodeErr = $mobNumErr = $expDateErr = " ";
$firstname = $middlename = $lastname = $email = $address = $city = $state = $postcode = $mobNum = $expDate = " ";

$amtError = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['purchaseDate'])){
      $expDate = strtotime("01-".$_POST['expmonth']."-".$_POST['expyear']);
      $minDate = strtotime('+1 month', strtotime($_POST['purchaseDate']));

      if($expDate < $minDate ){
        $expDateErr = "Card cannot be expired within 1 month";
        $amtError++;
      }
    }

      $firstname = cleanup($_POST["firstname"]);
      if (!preg_match("/^[a-zA-Z ]*$/",$firstname))
      {
        $nameErr = "Only letters and white space allowed";
        $amtError++;
      }

      $middlename = cleanup($_POST["middlename"]);
      if (!preg_match("/^[a-zA-Z ]*$/",$middlename))
      {
        $nameErr = "Only letters and white space allowed";
        $amtError++;
      }

      $lastname = cleanup($_POST["lastname"]);
      if (!preg_match("/^[a-zA-Z ]*$/",$lastname))
      {
        $nameErr = "Only letters and white space allowed";
        $amtError++;
      }

      $address = cleanup($_POST["address"]);
      if(preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $address))
      {
        $addressErr = "Invalid Address";
        $amtError++;
      }


      $email = cleanup($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
        $amtError++;
      }



}/***/

if($amtError ==  0)
{
  if(isset($_POST['checkout']))
  {
    foreach ($_SESSION['cart'] as $product) {
      $temp = preg_replace('/[^0-9.]+/', '', $product['price']);
      $unitPrice = $temp / $product['qty'];
      $data = $_POST['purchaseDate'] . "\t" . $_POST['firstname']." ".$_POST["middlename"]." ".$_POST["lastname"]."\t".$_POST['address']." ".$_POST["city"]." ". $_POST["postcode"]."\t".
      $_POST['email']."\t". $product['id']."\t".$product['option']."\t".$product['qty']."\t".$unitPrice."\t".$product['price']. "\r\n";

      $ret = file_put_contents('orders.txt', $data, FILE_APPEND | LOCK_EX);
      if($ret === false) {
          die('There was an error writing this file');
      }
      else {
          echo "$ret bytes written to file";
      }
    }



     }
else
{
   die('no post data to process');
}

      $_SESSION["firstname"] = $_POST["firstname"];
      $_SESSION["middlename"] =  $_POST["middlename"];
      $_SESSION["lastname"] = $_POST["lastname"];
      $_SESSION["email"] = $_POST["email"];
      $_SESSION["address"] = $_POST["address"];
      $_SESSION["city"] = $_POST["city"];
      $_SESSION["postcode"] = $_POST["postcode"];
      $_SESSION["number"] = $_POST["number"];
     header("Location: receipt.php");


}


function cleanup($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  topModule('Assignment 3');
?>





    <div class ="layout">
      <section class="grid">
        <article class="grid-content">
          <div class="row">
    <div class="col-75">
      <div class="container">
        <form name = "form" method="post" action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <input type='text' id='purchaseDate' name='purchaseDate' value='<?php echo date("d.m.y");?>' hidden>
              <br><label for="fname"><i class="fa fa-user"></i> First Name</label>
              <input type="text" id="fname" name="firstname" placeholder="Enter in Firstname" required>
              <span class = "error">*<?php echo $nameErr; ?></br>

              <br><label for="fname"><i class="fa fa-user"></i> Middle Name</label>
              <input type="text" id="fname" name="middlename" placeholder="Enter in Middlename">
              <span class = "error">*<?php echo $nameErr; ?></br>

            <br><label for="fname"><i class="fa fa-user"></i> Last Name</label>
              <input type="text" id="fname" name="lastname" placeholder="Enter in Firstname" >
              <span class = "error">*<?php echo $nameErr; ?></br>

            <br>  <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="example@example.com" required>
              <span class = "error">*<?php echo $emailErr; ?></span></br>

              <br><label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" placeholder="123 Street St" required>
              <span class = "error">*<?php echo $addressErr; ?></br>

              <br><label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" id="city" name="city" placeholder="City" required>
              <span class = "error">*<?php echo $cityErr; ?></br>

            <br>  <label for="mobilenumber"><i class="fa fa-institution"></i> Mobile Number</label>
              <input type="text" id="number" name="number" placeholder="+61 000 000 000">
              <span class ="error">*<?php echo $mobileNumberErr; ?></br>


              <br><div class="row">
                <div class="col-50">
                  <label for="state">State</label>
                  <select id=state required>
                    <option value="VIC"> Victoria </option>
                    <option value="NSW"> New South Wales </option>
                    <option value="QLD"> Queensland </option>
                    <option value="NT"> Northern Territory </option>
                    <option value="WA"> Western Australia</option>
                    <option value="SA"> South Australia</option>
                  </select>
                </div></br>
            <div class="col-50">
                  <label for="zip">Postcode</label>
                  <input type="text" id="postcode" name="postcode" placeholder="0000">
                </div></br>
              </div>
            </div>
            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards: VISA</label>
              <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
            </div>
              <br><label for="cname">Name on Card <abbr title="Required">*</abbr></label>
              <input type="text" id="cname" name="cardname" placeholder="Cardholder Name"</br>

          <br><label for="ccNum">Card Number <abbr title="Required">*</abbr></label>
            <input type="text" name="cardnumber" value="" onchange= "validateCardNumber(document.form.cardnumber)"></br>

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
                  <span class = "error">*<?php echo $expDateErr; ?></span>
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="123">
                </div>
              </div>
            </div>

          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </label>
          <input type="submit" name="checkout" value="Continue to checkout" class="btn">
        </form>

      </div>
    </div>


  </div>
      </article>
      </section>


  </div>


  <?php
    endModule();

  ?>
