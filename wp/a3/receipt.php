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
          <div id="receipt">

            <center id="top">
              <div class="logo"></div>
              <div class="info">
                <h2>MBS Stone</h2>
              </div><!--End Info-->
            </center><!--End InvoiceTop-->

            <div id="mid">
              <div class="info">
                <h2>Contact Info</h2>
                <p>
                  <i>Name:<?php echo $name ?> </i> <br>
                  <i>Address:<?php echo $address?></i>  <br>
                  <i><?php echo $city?> </i> <br>
                  <i><?php echo $zip?></i>  <br>
                  <i><?php echo "+614  " . $contactdetails?></i><br>
                  <i>Email:<?php echo $email?></i>
                </p>
              </div>
            </div><!--End Invoice Mid-->

            <div id="bot">

        					<div id="table">
        						<table>
        							<tr class="tabletitle">
        								<td class="item"><h2>Item</h2></td>
        								<td class="Hours"><h2>Qty</h2></td>
        								<td class="Rate"><h2>Sub Total</h2></td>
        							</tr>

        							<tr class="service">
        								<td class="tableitem"><p class="itemtext">Communication</p></td>
        								<td class="tableitem"><p class="itemtext">5</p></td>
        								<td class="tableitem"><p class="itemtext">$375.00</p></td>
        							</tr>

        							<tr class="service">
        								<td class="tableitem"><p class="itemtext">Asset Gathering</p></td>
        								<td class="tableitem"><p class="itemtext">3</p></td>
        								<td class="tableitem"><p class="itemtext">$225.00</p></td>
        							</tr>

        							<tr class="service">
        								<td class="tableitem"><p class="itemtext">Design Development</p></td>
        								<td class="tableitem"><p class="itemtext">5</p></td>
        								<td class="tableitem"><p class="itemtext">$375.00</p></td>
        							</tr>

        							<tr class="service">
        								<td class="tableitem"><p class="itemtext">Animation</p></td>
        								<td class="tableitem"><p class="itemtext">20</p></td>
        								<td class="tableitem"><p class="itemtext">$1500.00</p></td>
        							</tr>

        							<tr class="service">
        								<td class="tableitem"><p class="itemtext">Animation Revisions</p></td>
        								<td class="tableitem"><p class="itemtext">10</p></td>
        								<td class="tableitem"><p class="itemtext">$750.00</p></td>
        							</tr>


        							<tr class="tabletitle">
        								<td></td>
        								<td class="Rate"><h2>tax</h2></td>
        								<td class="payment"><h2>$419.25</h2></td>
        							</tr>

        							<tr class="tabletitle">
        								<td></td>
        								<td class="Rate"><h2>Total</h2></td>
        								<td class="payment"><h2>$3,644.25</h2></td>
        							</tr>

        						</table>
        					</div><!--End Table-->

        					<div id="taxinvoice">
        						<p class="legal"><strong>Thank you for your business!</strong>  Payment is expected within 31 days; please process this invoice within that time. There will be a 5% interest charge per month on late invoices.
        						</p>
        					</div>

        				</div><!--End InvoiceBot-->
          </div><!--End Invoice-->

          </article>
          <article>

          </article>
      </section>

  </div>


  <?php
    endModule();

  ?>
