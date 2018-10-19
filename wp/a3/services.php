<?php
  session_start();
  include_once('tools.php');
  topModule('Assignment 3');
  readProducts('services.txt');


?>
    <div class ="layout">
      <section class="grid">
        <form action="service.php" method="get">
        <article class="grid-content">

          <input type="submit" id="ms" value="ms" name="id"
    style="background-image: url('../../media/MSBStone-img(3).jpg') ;
  background-size: 100%; border: solid 0px #000000; width: 100%; height:1000%;" />
        </article>
        <article class="grid-content">

          <input name= "ms" type="image"  src='../../media/MSBClassic.jpg' width="100%" height="100%" alt= "Classic Styled Kitchen" title="Classic Styled Kitchen" id="csk" value="csk">

          </article>
        <article class="grid-content">
            <input type="image"  id="ml" src='../../media/MSBModern.jpg' width="100%" height="100%" alt= "Modern Lifestyle" title="Modern Lifestyle" value="ml">
        </article>
        <article class="grid-content">
            <input type="image"  id="lwk" src='../../media/MSBWood.jpg' width="100%" height="100%" alt= "Luxurious Wooden Kitchen" title="Luxurious Wooden Kitchen" value="lwk">
          </article>
      </form>
      </section>



  </div>

    <?php
      endModule();
    ?>
