<!DOCTYPE html>
<html lang='en'>
  <head>
    <link rel="stylesheet" href="css/style.css">

    <meta charset="utf-8">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
  </head>

  <body>
    <header>
    <img src='../../media/MSBStone-logo.png' = alt ='Melbourne Stone Benchtops'/>

    <nav class= "cool">
      <ul>
        <li><a href=index.php>Home</a></li>
        <li><a href=services.php>Services</a></li>
        <li><a href=login.php>Members</a></li>
      </ul>
    </nav>
  </header>
    <main>
    <div class ="layout">
      <section class="grid">
        <article class="grid-content">
          <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post" onsubmit="return submitValue();">
            <table>
              <tr><td>Product Name: </td>
                <td class="alignRight">Kitchen Stone</td></tr>
             <input type="text" value="kitchenstone" id="id" name="id" hidden>

             <tr><td><label for="option">Color: </label></td>
              <td class="alignRight"><select id="option" name="option" class="alignRight">
          <option value="eminentwhitepearl" class="alignRight">Eminent White Pearl</option>
          <option value="liquidplatinum" class="alignRight">Liquid Platinum</option>
          <option value="nebulagraypearl" class="alignRight">Nebula Gray Pearl</option>
        </select></td></tr>
        <tr><td>Quantity: </td>
    <td class="alignRight">
	<input type="button" class="qtybutton" value="-" onclick="minus()">
   <label for="qty"><input type="text" class="qtyfield" value="1" id="qty" name="qty"></label>
  <input type="button" class="qtybutton" value="+" onclick="plus()"></td></tr>
            <tr><td>Price: </td>
            <td class="alignRight">$300.00 (for a standard kitchen)</td></tr>

            <tr><td><input type="submit" value="Add to cart"></td></tr>
        </table>
        </form>
        <script src="script.js"></script>
        </article>
        <article class="grid-content"><img src='../../media/MSBStone-img(3).jpg' width="330" height="230" alt= "Stonebench with plate of poached eggs on toast."></article>
      </section>


  </div>
</main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Duy Linh Nguyen, s3429599.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>


  </body>



</html>
