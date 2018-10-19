<?php
  session_start();
  include_once('tools.php');
  $productInput = readProducts('services.txt');

  if(isset($_POST['clear-cart']))
{
    unset($_SESSION['cart']);
    unset($_SESSION['price']);
    header("Location: services.php");
}

  if(empty($_SESSION['cart']))
 {
     $_SESSION['cart'] = array();
     $_SESSION['price'];

 }

  if (isset($_POST['add'], $_POST['id'], $_POST['qty'], $_POST['option']) ) {

    if ( (int)$_POST['qty'] == $_POST['qty'] && (int) $_POST['qty'] > 0 ){

      if (productCheck($productInput,$_POST['id'])){
        if(productCheckOption($productInput,$_POST['id'],$_POST['option'])){
            $productName = productValue($productInput, $_POST['id'],"Title");
            $productOptions = productOption($productInput, $_POST['id']);
            $selectedOption = $productOptions[$_POST['option']];
            $productPrice = productValue($productInput, $_POST['id'],"Price") * $_POST['qty'];
            $formattedPrice = "$".number_format((float)$productPrice, 2, '.', '');



          $product = array("id" => $_POST['id'], "name" => $productName, "option" => $_POST['option'], "optionName" => $selectedOption, "qty" =>$_POST['qty'], "price" => $formattedPrice);
          $_SESSION['price'] += number_format((float)$productPrice, 2, '.', '');
          array_push($_SESSION['cart'],$product);


print_r($sumArray);
        }
        else{
          echo "<script>
          alert('Error, option id is invalid. Going back to list');
          window.location.href='services.php';
          </script>";
        }
      }
      else{
        echo "<script>
        alert('Error, product id is invalid. Going back to list');
        window.location.href='services.php';
        </script>";
      }
    }

    else{
      echo "<script>
      alert('Quantity number is invalid. Going back to list');
      window.location.href='services.php';
      </script>";
    }

  }


  topModule('Assignment 3');
?>

<section class="grid">

            <div class="cart">
                <table class="cartproduct">

                    <tr>
                        <th id="ID">ID</th>
                        <th id="Name">Name</th>
                        <th id="OID">Option ID</th>
                        <th id="option">Option</th>
                        <th id=Qty>Quantity</th>
                        <th id="price">Price</th>
                    </tr>
                    <?php

                    foreach($_SESSION['cart'] as $product){
                        $product = $product;
                        echo '<tr>';
                        foreach($product as $key => $record){
                            echo '<td>' . $record . '</td>';
                        }
                    }
                    ?>
                </table>
            </div>
        </section>

        <section class="grid">

                <div class="cart">

                      <p class="overall">TOTAL: $ <?php echo $_SESSION['price'] ?> </p>

                  <div class="leftcart">
                       <form method="post">
                            <input name="clear-cart" type=hidden value="clear-cart">
                           <button type=submit id="clear" class="clearbutton" action="cart.php"> CLEAR CART </button>
                        </form>
                        </div>

                    </div>
                    <div class="checkoutbutton">
                        <a class="cobutton" href="checkout.php">PROCEED TO CHECKOUT</a>
                    </div>

                </section>

  <?php
    endModule();

  ?>
