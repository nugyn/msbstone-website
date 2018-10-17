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
    <img src='../../media/MSBStone-logo.jpg' = alt ='Melbourne Stone Benchtops'/>

    <nav class= "cool">
      <ul>
        <li><a href=index.php>Home</a></li>
        <li><a href=services.php>Services</a></li>
        <li><a href=login.php>Members</a></li>
      </ul>
    </nav>
  </header>
    <main>
    <div class ="content">
      <section class="grid">
        <div class ="login">
        <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=login" class="loginForm" method="post">
  <div class="container">
    <label for="email"></label>
    <input type="email" placeholder="Email" name="email" class="loginInput" required>

    <label for="password"></label>
    <input type="password" placeholder="Password" name="password"  class="loginInput" required>
    <button type="submit" class ="duyButton">Login</button>

  </div>


  <div class="container">
    <button type="reset" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</div>
</form>
</div>
      </section>


  </div>
</main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Duy Linh Nguyen, s3429599. Lam Hoang Tran, s3714110</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>


  </body>



</html>
