<?php
  function topModule($pageTitle) {
    $output = <<<"THELASTJEDI"
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>$pageTitle</title>
    <!-- plus link, script and meta tags common to all pages -->
  </head>
  <body onload='$onload'>
    <header>
      <h1><img src='company-logo.png' alt='logo'/>Business Name</h1>
    </header>
    <nav>
      <div><a href='index.php'>Home</a></div>
      <div><a href='rates.php'>Rates</a></div>
      <div><a href='accommodation.php'>Accommodation</a></div>
    </nav>  
    <main>
THELASTJEDI; 
    echo $output;
  } 
?>
