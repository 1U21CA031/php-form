<?php
  include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-eqiv="x-UA-compatiable"  content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="Stylesheet"  type="text/css" href="form.css">
</head>
<body>
    <div id="form">
       <h1> Login Form </h1>
        <form name="form" action="login.php"onsubmit="return isValid()"  method="POST">
            <label>Username:</label>
            <input type="text" id="user" name="user"><br></br>
            <label>Password:</label>
            <input type="password" id="pass" name="pass"></br></br>
            <input type="submit" id="btn" value="login" name="Submit">
        </Form>
    </div>
    <script>
       function isValid(){
        var user = document.form.user.value;\
        var pass = document.form.pass.value;

        if(user.length=="" && pass.length==""){
            alert("Username and password field is empty!!!");
            return false
        }

        if(user.length=="" ){
            alert("Username is empty!!!")
            return false
        }
        if(pass.length=="" ){
            alert("Password is empty!!!")
            return false
        }
       }
       

    </script>

</body>
</html>