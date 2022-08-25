<?php include('server.php') ?>
<html lang="en">
<head>
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>
    <form action="login.php" method="POST">
    <?php include('errors.php'); ?>
      Username: <input type="text" name="username" required/><br />
      Password: <input type="text" name="password" required/><br />
      <button type="submit" name="login_user">Login</button>
    </form>
    <p>Don't have Account? <a href="register.php"><b>Register</b></a></p>
</body>
</html>