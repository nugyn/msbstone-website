
<?php
  session_start();
  include_once('tools.php');
  topModule('Assignment 3');
  $productInput = readProducts('services.txt');

  if(isset($_GET['id']) && productCheck($productInput, $_GET['id']) ){

    preShow(productCheck($productInput, $_GET['id']));

  $productID = productValue($productInput, $_GET['id'],"ID");
  $productName = productValue($productInput, $_GET['id'],"Title");
  $productPrice = productValue($productInput, $_GET['id'],"Price");
  $productDescription = productValue($productInput, $_GET['id'],"Description");
  $productOptions = productOption($productInput, $_GET['id']);
  }

  else {
     header('Location: services.php');
  }



?>
    <div class ="layout">
      <section class="grid">
        <article class="grid-content">
          <form action="cart.php" method="post" onsubmit="return submitValue();">
            <table>
              <tr><td class="servicetd">Product Name: </td>
                <td class="alignRight"><?php echo $productName; ?> </td></tr>
             <input type="text" value="<?php echo $productID; ?>" id="id" name="id" hidden>

             <tr><td class="servicetd"><label for="option">Color: </label></td>
              <td class="alignRight"><select id="option" name="option" style="font-style: italic;">
                <?php
                foreach ($productOptions as $key => $value) {
                echo "<option value=" , $key , ">" , $value , "</option>";
                }
                ?>

        </select></td></tr>
        <tr><td class="servicetd">Quantity: </td>
    <td class="alignRight">
	<input type="button" class="qtybutton" value="-" onclick="minus() ; updatePrice()">
   <label for="qty"><input type="text" class="qtyfield" value="1" id="qty" name="qty" onsubmit="checkinput()" oninput="updatePrice()"></label>
  <input type="button" class="qtybutton" value="+" onclick="plus() ;  updatePrice()"></td></tr>
            <tr><td class="servicetd">Price: </td>
            <td class="alignRight">$<span id="pricechange"><?php echo $productPrice; ?></span></td></tr>

            <tr><td></td>
              <td class="allignRight">
              <input type="submit" id="add" name="add" value="Add to cart" class="submitButton"></td></tr>
        </table>
        </form>
        </article>
        <script type="text/javascript" src="script.js"></script>
        <article class="grid-content">
          <?php
          if($productID == "ms"){
            echo "<img src='../../media/MSBStone-img(3).jpg'>";
          }
          elseif ($productID == "csk") {
            echo "<img src='../../media/MSBClassic.jpg'>";
          }
          elseif ($productID == "ml"){
              echo "<img src='../../media/MSBModern.jpg'>";
          }
          elseif ($productID == "lwk"){
            echo "<img src='../../media/MSBWood.jpg'>";
          }
           ?>

        </article>
        <article class="grid-content">
        <span class="descriptionText"><b>Description: </b><?php echo $productDescription; ?> </span>
        </article>
      </section>


  </div>
  <?php
    endModule();

  ?>
