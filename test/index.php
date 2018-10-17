
<?php
  session_start();
  include_once('tools.php'); // now contains module and other helpful functions

  // Any POST or GET Request Processing Code goes here

  topModule('Business Name - Home'); // Now a function call 
?>
  <h2>Welcome to Our Business</h2>
  <p>We have nice things!</p>
  <!-- Blah blah Blah, rest of content unique to index.php --> 
<?php
  endModule(); // Now a function call
?>
