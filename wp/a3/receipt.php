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
          <i><?php echo $name ?> </i> <br>
          <i><?php echo $address?></i>  <br>
          <i><?php echo $city?> </i> <br>
          <i><?php echo $zip?></i>  <br>
          <i><?php echo "+614  " . $contactdetails?></i><br>
          <i><?php echo $email?></i>

          </article>
          <article>

          </article>
      </section>

  </div>


  <?php
    endModule();

  ?>
