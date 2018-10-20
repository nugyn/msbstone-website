<?php
  session_start();
  include_once('tools.php');
  topModule('Assignment 3');
  readProducts('services.txt');


?>
    <div class ="layout">
      <section class="grid">
        <article class="grid-content"><a href="service.php?id=ms" onclick="get"><img src='../../media/MSBStone-img(3).jpg'  alt= "Marble Stonebench" title="Marble Stonebench"></a></article>
        <article class="grid-content"><a href="service.php?id=csk" onclick="get"><img src='../../media/MSBClassic.jpg'  alt= "Classic Styled Kitchen" title="Classic Styled Kitchen"></a></article>
        <article class="grid-content"><a href="service.php?id=ml" onclick="get"><img src='../../media/MSBModern.jpg'  alt= "Modern Lifestyle" title="Modern Lifestyle"></a></article>
        <article class="grid-content"><a href="service.php?id=lwk" onclick="get"><img src='../../media/MSBWood.jpg'  alt= "Luxurious Wooden Kitchen" title="Luxurious Wooden Kitchen"></a> </article>
      </section>



  </div>

    <?php
      endModule();
    ?>
