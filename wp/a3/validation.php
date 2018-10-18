/*
*
*
*
*
*
*OBESELTE
/










<?php

$nameErr = $emailErr = $addressErr = $cityErr = = $stateErr = $postcodeErr = $mobNumErr = $expDateErr = "";
$name = $email = $address = $city = $state = $postcode = $mobNum = $expDate = "";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
      if (empty($_POST["name"])) {
          $nameErr = "Missing";
      }
      else {
          $name = $_POST["name"];
          echo $name;
          if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
          }
      }

      if (empty($_POST["address"])) {
          $addrErr = "Missing";
      }
      else {
          $address = $_POST["address"];
          if(!preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $name))
          {
            $addressErr = "Invalid Address";
          }
      }

      if (empty($_POST["email"]))  {
          $emailErr = "Missing";
      }
      else {
          $email = $_POST["email"];
          // check if e-mail address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
          }
      }
      if (empty($_POST["mobilenumber"])) {
        $mobNumErr = "Missing";
      }
      else {
        $mobNum = $_POST["mobilenumber"];
        if(substr($mobNum, 0, 4 ) == +614 || substr($mobNum, 0, 2 ) == 04 || substr($mobNum, 0, 4 ) == (04))
        {
          echo "all good";
        }
        else
        {
          $mobNum = 'Please enter in a valid mobile number. Include: +614 or 04 or (04) in the beggining';
        }
      }
      if (empty($_POST["expDate"]) {
        $expDateErr = "Missing";
      }
      else {
        $expDate = $_POST["expDate"];
        $futureexpDate=date_create(strtotime($expDate. '+ 28 days'));
        $diff=date_diff($expDate,$futureexpDate);
        $compareDate = =date_create()
        echo $diff->format("%R%a days");

        if($diff < '28 days'){
          $expErr = 'You cannot user this card within 28 days of its expiration'
        }
      }
}


 ?>
