<head> <link rel="stylesheet" href="style.css"></head>
<?php
 $pdo = new PDO('mysql:host=localhost;port=3306;dbname=users','root');
 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 if(isset($_POST['delete'])){
   $id=$_POST['id'];
   $stmt=$pdo->prepare("DELETE FROM user WHERE id=$id ");
   $stmt->execute();
     header('Location:http://localhost/crud/crud.php');
 }



 ?>
