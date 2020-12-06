<head> <link rel="stylesheet" href="style.css"></head>
<?php
 $pdo = new PDO('mysql:host=localhost;port=3306;dbname=users','root');
 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo" <table>";
echo" <tr><th>id</th><th> first name</th><th>last name</th>";
echo"<th>email</th><th>phone no.</th></tr>";

 echo " <tr> <td>";
 print_r($_POST['id']."</td>");
print_r("<td>".$_POST['fname']."</td>");
print_r('<td>'.$_POST['lname'].'</td>');
print_r('<td>'.$_POST['email'].'</td>');
print_r( "<td>".$_POST['numb']."</td>");


 ?>
 <a class="view" href="http://localhost/crud/crud.html">create new record</a>
 <a href="crud.php"> back</a>
