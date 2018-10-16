<?php
  session_start();
  include_once('tools.php');
  topModule('Assignment 3');
?>
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
  
  <?php
      endModule();
    ?>
