<?php

//connect to db
include 'Includes/db.inc.php';
include 'Includes/magicquotes.inc.php';

//Check if any1 has clicked on addcomment, if so present the form.html.php

if (isset($_GET['addcomment']))
{
include 'form.html.php';
exit();
}

if (isset($_GET['login'])) {
  include 'userlogin/login.php';
  exit();
}

//Check if user has clicked on the join penguin btn, if yes then take us to it's reg form
if (isset($_GET['reg'])) {
  include 'registration.php';
  exit();
}
//test


if (isset($_GET['home'])) {
  header('Location: .');
  exit();
}

//Check if data has been set from thr FORM
if (isset($_POST['comment']))
{

try
{
$sql = 'INSERT INTO penguin_tbl SET
comment = :comment,
comment_date = CURDATE()';
$s = $pdo->prepare($sql);
$s->bindValue(':comment', $_POST['comment']);
$s->execute();
}
catch (PDOException $e)
{
$error = 'Error adding submitted comment: ' . $e->getMessage();
include 'error.html.php';
exit();
}
header('Location: .');
exit();
}

//Choosing the comment from our db
try {
  //Collecting the name of the person who created the comment, from another table
//  $sql = 'SELECT penguin_tbl.penguin_id, comment, name, email FROM
  //        penguin_tbl INNER JOIN author ON author_id = author.id';
  $sql = 'SELECT comment FROM penguin_tbl';
    //$sql = 'Select comment FROM penguin_tbl';
    $result = $pdo->query($sql);
}//end collect data code

catch (PDOException $e){
    $error = 'Error fetching comments: '. $e->getMessage();
    include 'error.html.php';
    exit();

}//the failure to catch rows code.

//foreach ($result as $row)
//{
//$comments[] = $row['comment'];
//}
//include 'home.html.php';
//Below is the adding codes

//code to controll the output
while( $row = $result->fetch()){
    $comments[]  = $row['comment'];
}//end condition

include 'home.html.php';


?>
