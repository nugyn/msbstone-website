
<?php
  session_start();
  include_once('tools.php');
  topModule('Assignment 3');
?>
    <div class ="layout">
      <section class="grid">
        <article class="grid-content">
          <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post" onsubmit="return submitValue();">
            <table>
              <tr><td class="servicetd">Product Name: </td>
                <td class="alignRight">Marble Stone</td></tr>
             <input type="text" value="marblestone" id="id" name="id" hidden>

             <tr><td class="servicetd"><label for="option">Color: </label></td>
              <td class="alignRight"><select id="option" name="option" style="font-style: italic;">
          <option value="eminentwhitepearl" >Eminent White Pearl</option>
          <option value="liquidplatinum" >Liquid Platinum</option>
          <option value="nebulagraypearl">Nebula Gray Pearl</option>
        </select></td></tr>
        <tr><td class="servicetd">Quantity: </td>
    <td class="alignRight">
	<input type="button" class="qtybutton" value="-" onclick="minus()">
   <label for="qty"><input type="text" class="qtyfield" value="1" id="qty" name="qty" onsubmit="checkinput()"></label>
  <input type="button" class="qtybutton" value="+" onclick="plus()"></td></tr>
            <tr><td class="servicetd">Price: </td>
            <td class="alignRight">$300.00 (for a standard kitchen)</td></tr>

            <tr><td></td>
              <td class="allignRight">
              <input type="submit" value="Add to cart" class="submitButton"></td></tr>
        </table>
        </form>
        </article>
        <script type="text/javascript" src="script.js"></script>
        <article class="grid-content"><img src='../../media/MSBStone-img(3).jpg' alt= "Stonebench with Eminent White Pearl color"></article>
        <article class="grid-content">
        <span class="descriptionText"><b>Description: </b> Crafted from one of the most precious marble stones under the artistic hands of our crafting master, this kitchen bench model will lighten up your family kitchen with a bright and shiny texture.</span>
        </article>
      </section>


  </div>
  <?php
    endModule();
  ?>
