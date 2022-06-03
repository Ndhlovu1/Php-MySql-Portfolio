<?php

  require_once('Includes/db.inc.php');
  //include 'Includes/db.inc.php';
  require_once('Includes/magicquotes.inc.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
<title>Registration Menu</title>
  <script>

  function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    }
    else {
      x.type = "password";
    }
  }


  </script>

<link rel="stylesheet" type="text/css" href="css/hardcodes.css">
  <style>

  body{
    background-image: url("Images/_111925035_penguino.jpg ");
  }

  </style>
</head>

<body>
  <div>
    <?php
      if (isset($_POST['create'])) {

        $firstname    = $_POST['firstname'];
        $lastname     = $_POST['lastname'];
        $email        = $_POST['email'];
        $cell         = $_POST['cell'];
        $password     = $_POST['password'];

//        echo $firstname . " " . $lastname . " ". $email . " " . $cell ." " . $password;

      $sql = "INSERT INTO users (firstname, lastname, email, cell, password) VALUES(?,?,?,?,?)";
      $query = $pdo->prepare($sql);
      $result = $query->execute([$firstname, $lastname, $email, $cell, $password]);

      if($result){
      //  echo "Successfully Saved";
       header('Location: .');

      }else {
        echo "Error Saving Data";
      }

      }
    ?>

  </div>

  <div>
    <form action="registration.php" method="post">
      <center><fieldset><legend><h1> PENGUIN CHAT GROUP</h1></legend><br />
        <div class="form1">
    <hr >
      <label class="login-box" for="firstname"><b>First Name</b></label><br />
      <input type="text" name="firstname" placeholder="Enter First Name"required>
    <p ></p>
      <label for="lastname"><b>Last Name</b></label><br />
      <input type="text" name="lastname" placeholder="Enter Surname" required>
    <p ></p>
      <label for="email"><b>E-mail</b></label><br />
      <input type="email" name="email" placeholder="Enter working E-mail" required>
    <p ></p>
      <label for="cell"><b>Cellphone</b></label><br />
      <input type="text" name="cell" placeholder="Enter cellphone number" required>
    <p ></p>
      <label for="password"><b>Password</b></label><br />
      <input type="password" name="password" id="password" min="4" placeholder="8 Character Password" required>
    <p ></p>
    <input type="checkbox" onclick="myFunction()">Show Password
    <p ></p>
      <input class="btnclose" type="submit" name="create" value="Register">
      <button type="reset" class="btnclose" >Reset</button>

    </fieldset>
    </form>
</div>
</div>

<?php
include 'Includes/footer.Inc.html.php';

?>

</div>
