<?php
  include_once 'Includes/helpers.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
<title>Penguin Chat</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!--Because IE Doesnt support all HTML5, we must tell browsers not to call some HTML5 elements in IE-->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!--Creating a rounded img-->
<style>
img {
  border-radius: 50%;
  padding-right: 10px;
  }
.pics {

  height: 50px;
}

</style>
<link rel="stylesheet" type="text/css" href="css/hardcodes.css">

</head>

<body>
<!--Header Section -->

<div class="container" class="col-xs-10">
  <div class="page-header">
    <h1><img src="Images/pic1.jpg" alt="pic1" style="width:200px"><br>Penguin Leader
    <br /> <small>Iron Sharpens Iron</small>
    </h1>
    </div>

<div class="panel">
    <div class="panel panel-default">
        <div class="panel-heading">
          STATUS
        </div>
    </div>
    <div class="panel-body">
      Lead of Penguin Developers at Glowdom. Aimed at training all people
      interested in Web-Development and Mobile-Applications Development.
      The Namibian based Afro-centric EdTech company can be found at <a href="https://glowdom.com">Glowdom</a>.
      Penguin Developers are currently accepting members.
    </div>
      <div class="panel-footer">
      <a href="https://forms.glowdom.com/lomakkeet/638/lomakkeet.html" target="_blank"class="btn btn-danger btn-sm">Sign Up</a>
<a href="?reg" class="btn btn-primary btn-sm" style="padding-left:2px">Join Penguin Chat</a>
<a href="?login" class="btn btn-danger btn-sm" style="padding-left:2px">Login</a>
  </div>
</div>
<center>
<div class="pics">
<div class="row">
<div class="col-xs-12 col-lg-3">
<a href="#" class="thumbnail">
<img src="Images/fav.png" height="auto" width="97px">
</a>
</div>
<div class="col-xs-12 col-lg-3">
<a href="#" class="thumbnail">
<img src="Images/android-logo.png" height="auto" width="600px">
</a>
</div>

<div class="col-xs-12 col-lg-3">
<a href="#" class="thumbnail" >
<img src="Images/linus.png" height="auto" width="200px">
</a>
</div>
</div>

</div>

</div>

<div class="container">
  <div class="page-header"><h1><center>Comments</center></h1>

<p><a href="?addcomment">Add your comment</a></p>
<p><small>Leave your comment, We will get back to you ASAP!</p>
<?php foreach ($comments as $comment): ?>
<blockquote>
<p><?php echo htmlspecialchars($comment, ENT_QUOTES, 'UTF-8');
?>

</p>
</blockquote>
<?php endforeach; ?>

</div>



<?php
include 'Includes/footer.Inc.html.php';

?>

</div>





<!--                 BOTTOM CODE                                     -->
  <!-- Visit the official jquery.com to download version 1.11.1 coz
  +IE8 support has been discontinued. Simply right click and download
  the entire downloads page, this will give u all the files inclyuding the 1.11.1 that we need
   -->
   <script src="js/jquery.js"></script>
   <script src="js/bootstrap.js"></script>
</body>
</html>
