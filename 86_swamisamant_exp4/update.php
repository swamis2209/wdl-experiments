<head> <link rel="stylesheet" href="style.css"></head>
<body>
  <div>
  <form name="f1 " class="crud" method="post" action="update1.php" >
    <h1>Update</h1>
    <p>
    <label for="fname">First Name:</label>
    <input type="text" name="fname" value="<?=htmlentities($_POST['fname'])?>" />
    </p>
    <p>
    <label for="lname">Last Name:</label>
    <input type="text" name="lname" value="<?=htmlentities($_POST['lname'])?>" />
    </p>
    <p>
    <label for="email">Email ID :</label>
    <input type="text" name="email" value="<?=htmlentities($_POST['email'])?>"/>
    </p>
    <p>
    <label for="numb">Phone no :</label>
    <input type="text" name="numb" value="<?=htmlentities($_POST['numb'])?>"/>
    </p>
    <input type="hidden" name="id" value="<?=htmlentities($_POST['id'])?>"/>

    <input class="submit" type="submit" name="update" value="update">

  </form>
</div>
</body>
