<?php
include 'connection1.php';
if ( isset($_POST['name']) &&isset($_POST['email']) && isset($_POST['pass']) )
{
  $pass=hash('md5',$_POST['pass']);
  $sql="INSERT INTO login (username,email,pass) VALUES (:name,:email,:pass)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute( array (':name' =>$_POST['name'] ,
  ':pass'=>"$pass",
  'email'=>$_POST['email'] ));
  echo "registration successfull";
  echo "you will be redirected to login page. if not click <a href='http://localhost/login/index.html'login page</a>";
    sleep(5);
    header('Location:http://localhost/login/index.html');
}
else{
  echo "registration not successful";
}
