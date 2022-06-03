<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
<title>Comment Form</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!--Because IE Doesnt support all HTML5, we must tell browsers not to call some HTML5 elements in IE-->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!--
<script>
  function emailAlert(){
    alert("Your E-mail will not be publicized");
  }

</script>
-->
</head>

<body >

  <h1><center>Leave a Comment</center></h1>
  <div class="well well-sm">
    <form action="?" method="post" class="form-horizontal">
<!--
    <div class="form-group">
      <label for="email" class="col-xs-2">Email</label>
      <div class="col-xs-10">
        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required/>
      </div>
    </div> -->

    <div class="form-group">
      <label for="comment" class="col-xs-2">Comment</label>
        <div class="col-xs-10">
          <textarea class="form-control" name="comment" id="comment"  placeholder="Your Comment About the Penguin Developers" required></textarea>
        </div>
    </div>
    <div <div class="col-xs-10 col-xs-2-offset-2">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-default">Reset</button>

  </div>
  </form>
</div>

<div class="panel-footer">
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
