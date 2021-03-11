<?php 

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Login Page</title>

</head>
<body>


    <form action="login.php" method="post">
    <table width="599" border="1" align= "center">
    <tr>
      <th><label for="username">ชื่อผู้ใช้</label>
        <input type="text" name="username" placeholder="Username" required></th>
    </tr>
    <tr>
      <th><label for="password">รหัสผ่าน</label>
        <input type="password" name="password" placeholder="Password" required></th>
    </tr>
    <tr>
    <th>  <input type="submit" name="submit" value="Login">
    <a href="register.php">Go to register</a></th>
        </tr>
    </form>
    
</body>
</html>

<?php 

    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }

?>