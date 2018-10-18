<?php
  session_start();
  include_once('tools.php');

  topModule('Assignment 3');
  $name = $_SESSION['firstname'] . " " . $_SESSION['middlename'] . " " . $_SESSION['lastname'];
  $email = $_SESSION['email'];
  $address = $_SESSION['address'];
  $city = $_SESSION['city'];
  $zip = $_SESSION["zip"];
  $contactdetails = $_SESSION["number"];
?>

    <div class ="layout">
      <section class="grid">
        <article>
          <h1><img src'../../media/MSBStone-logo.jpg' =alt ='Melbourne Stone Benchtops Logo'/></h1>
          <h1>Receipt</h1>
          <p> 13 Fake St, Fake, 0000</p>
          <p>T: 0000 0000 M: 0000 000 000</p>
          <p>E: fake@email.com</p>
         <?php echo
          <h1>Invoice <br></h1>
          Shipped to:<br>
          <i>  $name </i> <br>
          <i>< $address</i>  <br>
          <i> $city </i> <br>
          <i> $zip</i>  <br>
          <i> "+614  " . $contactdetails</i><br>
          <i>$email</i> ?>

          </article>
          <article>

          </article>
      </section>

  </div>


  <?php
    endModule();

  ?>
