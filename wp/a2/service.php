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
    <div class ="l-wrap">
      <section class="three-col-grid">
        <article class="grid-item">
          <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="post" onsubmit="return submitValue()">
          <p>Product Name: Kitchen Stone<p>
             <input type="text" value="kitchenstone" id="id" name="id" hidden>
            <p></p>
        <p><label for="option">Color: </label>
         <select id="option" name="option">
          <option value="color1">Color 1</option>
          <option value="color2">Color 2</option>
          <option value="color3">Color 3</option>
        </select></p>
              <p></p>
	<input type="button" value="-" onclick="minus()">
   <label for="qty"><input type="text" value="1" id="qty" name="qty"></label>
  <input type="button" value="+" onclick="plus()"
              <p></p>
              <p>Price: <p>
                <p></p>
                <input type="submit" value="Add to cart">
        </form>
        <script src="script.js"></script>
        </article>
        <article class="grid-item"><img src='../../media/MSBStone-img(3).jpg' width="330" height="230" alt= "Stonebench with plate of poached eggs on toast."></article>
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
