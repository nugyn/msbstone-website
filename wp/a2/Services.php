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
    <div class ="layout">
      <section class="grid">
        <article class="grid-content"><a href=service.php><img src='../../media/MSBStone-img(3).jpg'  alt= "Marble Stonebench" title="Marble Stonebench"></a></article>
        <article class="grid-content"><img src='../../media/MSBClassic.jpg'  alt= "Classic Styled Kitchen" title="Classic Styled Kitchen"></article>
        <article class="grid-content"><img src='../../media/MSBModern.jpg'  alt= "Modern Lifestyle" title="Modern Lifestyle"></article>
        <article class="grid-content"><img src='../../media/MSBWood.jpg'  alt= "Luxurious Wooden Kitchen" title="Luxurious Wooden Kitchen"> </article>
      </section>


  </div>
</main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Duy Linh Nguyen, s3429599.  Lam Hoang Tran, s3714110</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>


  </body>



</html>
