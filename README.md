# php-form

README.md
This is a simple login form using PHP and MySQL.

Requirements:

PHP
MySQL
Installation:

Create a database called demo.
Create a table in the database called login with the following columns:
| Column | Type |
|---|---|
| id | int |
| username | varchar(255) |
| password | varchar(255) |
Import the connection.php file into your project.
Create a new file called login.php and copy the following code into it:
PHP
<?php
include("connection.php");

if(isset($post['submit'])){
  $username = $_POST['user'];
  $password = $_POST['pass'];

  $sql = "select * from login where username='$username' and password='$password';";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if($count == 1){
    header("Location:welcome.php");
  } else{
    echo "<script>
      window.location.href='form.php';
      alert('Login failed. Invalid username or password.');
    </script>";
  }
}
?>
Use code with caution. Learn more
Create a new file called form.php and copy the following code into it:
HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-eqiv="x-UA-compatiable" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="Stylesheet" type="text/css" href="form.css">
</head>
<body>
  <div id="form">
    <h1> Login Form </h1>
    <form name="form" action="login.php" onsubmit="return isValid()" method="POST">
      <label>Username:</label>
      <input type="text" id="user" name="user"><br></br>
      <label>Password:</label>
      <input type="password" id="pass" name="pass"></br></br>
      <input type="submit" id="btn" value="login" name="Submit">
    </Form>
  </div>
  <script>
    function isValid(){
      var user = document.form.user.value;
      var pass = document.form.pass.value;

      if(user.length == "" && pass.length == ""){
        alert("Username and password field is empty!!!");
        return false;
      }

      if(user.length == ""){
        alert("Username is empty!!!");
        return false;
      }

      if(pass.length == ""){
        alert("Password is empty!!!");
        return false;
      }
    }
  </script>

</body>
</html>
Use code with caution. Learn more
Create a file called form.css and add your CSS styles to it.
Usage:

Open form.php in a web browser.
Enter your username and password and click the "Login" button.
If the login is successful, you will be redirected to the welcome.php page. Otherwise, you will see an error message.
Troubleshooting:

If you are having problems with the login form, please check the following:

Make sure that the connection.php file is configured correctly.
Make sure that the login table exists in the database.
Make sure that you have entered the correct username and password.
