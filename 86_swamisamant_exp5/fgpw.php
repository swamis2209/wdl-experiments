<?php
  include 'connection1.php';
  $count=0;
    $email=$_POST['email'];
    $username=$_POST['username'];
    $pass=hash('md5',$_POST['pw']);
  $query=$pdo->query('SELECT * FROM login');
  $query->execute();
  while($row=$query->fetch(PDO::FETCH_ASSOC)){
    if ($row['email']==$email && $row['username']==$username){
      $sql=$pdo->prepare("UPDATE login SET pass='$pass' ");
      $sql->execute();
      $count=1;
      echo "password changed successful";
  }


}
if($count!=1){
  echo "enter a valid email and username";
}


?>
