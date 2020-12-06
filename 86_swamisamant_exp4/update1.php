<?php
 $pdo = new PDO('mysql:host=localhost;port=3306;dbname=users','root');
 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   $email=$_POST['email'];
   $numb=$_POST['numb'];
   $id=$_POST['id'];
 $stmt=$pdo->prepare("UPDATE user SET fname=:fname, lname=:lname , email=:email , numb=:numb WHERE id=:id ");
 $stmt->execute(array(':fname'=>"$fname",':lname'=>"$lname",':email'=>"$email",':numb'=>"$numb",':id'=>"$id" ));
 header('Location:http://localhost/crud/crud.php');

?>
