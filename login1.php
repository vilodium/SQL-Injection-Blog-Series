<?php require_once('config.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login 1</title>
  <style>
    body{
      text-align: center;
      background-color: #d6d6d6;
    }
  </style>
</head>
<body>
<?php
if (!empty($_POST['username']) && !empty($_POST['password']))
{
  $user = $_POST['username'];
  $password = $_POST['password'];

    $sql_query = "SELECT * FROM users WHERE username = '$user' AND password = '$password'";
    $result = mysqli_query($conn,$sql_query);
    $count = mysqli_num_rows($result);
      
    if($count == 2) {
       $color = "green";
       $status = "Granted";
    }
    else {
       $color = "red";
       $status = "Denied";
    }

  echo "<h2>Username: $user</h2>\n<h2>Password: $password</h2>\n<h1 style=\"color: $color;\">Access $status</h1>";
}
else {
echo "<h1>Please enter valid data</h1>\n";
}
?>
</body>
</html>
