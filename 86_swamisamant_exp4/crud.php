<head> <link rel="stylesheet" href="style.css"></head>
<a href="crud.html" >create a new record</a>
<h1>records</h1>
<?php
 $pdo = new PDO('mysql:host=localhost;port=3306;dbname=users','root');
 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['number'])){
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $number=$_POST['number'];
$stmt=$pdo->prepare("CREATE TABLE IF NOT EXISTS user (id int NOT NULL AUTO_INCREMENT UNIQUE,fname varchar(255),lname varchar(255),email varchar(255),numb varchar(255));");
$stmt->execute();
$sql=$pdo->prepare("INSERT INTO user (fname,lname,email,numb) VALUES (:fname,:lname,:email,:numb)");
$sql->execute(array(':fname'=>"$fname",':lname'=>"$lname",':email'=>"$email",':numb'=>"$number"));
}
$prnt=$pdo->query("SELECT * FROM user");
echo "<table>";
echo" <tr><th>id</td><th> first name</th><th>last name</th>";
echo"<th>email</th><th>phone no.</th><th>view</th><th>delete</th><th>update</th></tr>";
while ($row=$prnt->fetch(PDO::FETCH_ASSOC)){
  print_r("<tr> <td>".$row['id']."</td>");
  echo "  <td>";
  print_r($row['fname']."</td>");
  print_r('<td>'.$row['lname'].'</td>');
  print_r('<td>'.$row['email'].'</td>');
  print_r( "<td>".$row['numb']."</td>");
  print_r(" <form method='post' action='view.php' >");
  print_r('<input type="hidden" name="id" value="'.$row['id'].'" >');
  print_r('<input type="hidden" name="fname" value="'.$row['fname'].'" >');
  print_r("<input type='hidden' name='lname' value='".$row['lname']."' >");
  print_r("<input type='hidden' name='email' value='".$row['email']."' >");
  print_r("<input type='hidden' name='numb' value='".$row['numb']."' >");
  echo "<td>";
  print_r("<input class='submit' type='submit' name='view' value='view'");
  echo "</td> </form>";
  echo "<form method='post' action='del.php'> ";
  print_r('<input type="hidden" name="id" value="'.$row['id'].'">');
  print_r("<td> <input class='submit' type='submit' name='delete' value='delete' </td> </form>");
  echo "<form method='post' action='update.php'>";
    print_r('<input type="hidden" name="id" value="'.$row['id'].'" >');
  print_r('<input type="hidden" name="fname" value="'.$row['fname'].'" >');
  print_r("<input type='hidden' name='lname' value='".$row['lname']."' >");
  print_r("<input type='hidden' name='email' value='".$row['email']."' >");
  print_r("<input type='hidden' name='numb' value='".$row['numb']."' >");
  print_r("<td> <input class='submit' type='submit' name='update' value='update' </td> </form>");


}
echo "</table>";


 ?>
