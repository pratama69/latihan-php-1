<?php

session_start();
if (isset ($_POST['Login'])) {
    $user = $_POST['user']; 
   $pass = $_POST['pass'];
    //periksa login
    if ($user == "nanda" && $pass = "123456") {
    //menciptakan session
    $_SESSION['login'] = $user;
    //menuju ke halaman pemeriksaan session
    echo "<h1>Halaman 1</h1>";
    }
   } else {
   ?>
   <html>
    <head>
    <title>Login here...</title>
    </head>
    <body>
    <form action="" method="post">
    <h2>Login Here<hr></h2>
    Username : <input type="text" name="user"><br>
    Password : <input type="password" name="pass"><br>
    <input type="submit" name="Login" value="Log In">
    </form>
    </body>
   </html>
   <?php } ?> 