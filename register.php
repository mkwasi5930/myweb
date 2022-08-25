<?php include('server.php') ?>
<html lang="en">
<head>
  <title>User Registration</title>
</head>
<body>
  <h1>Register</h1>
    <form action="register.php" method="POST">
    <?php include('errors.php'); ?>
      Username: <input type="text" name="username" required /><br />
      Email: <input type="text" name="email" required /><br />
      Password: <input type="text" name="password_1" required/><br />
      Confirm password: <input type="text" name="password_2" required/><br />
      <button type="submit"name="reg_user">Register</button>
    </form>
    <p>Already a User? <a href="login.php"><b>LogIn</b></a></p>
</body>
</html>
