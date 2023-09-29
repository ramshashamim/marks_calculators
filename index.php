<?php
include "connection.php";
if(isset($_POST['login_submit'])){
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    

    $query = "SELECT * FROM  user WHERE email = '$user_email' AND password = '$user_password'";
    $result = mysqli_query($connection, $query);
    
    if($result){
       
        if(mysqli_num_rows($result) > 0){
          $user = mysqli_fetch_assoc($result); // Get user details
        $_SESSION['user'] = $user['id']; // Store user details in a session
          echo '<script>alert("Login successful")</script>';
        } else {
            echo '<script>alert("invalid email or password")</script>';
        }
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}


if(isset($_POST['signup_submit'])){
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $hash_password = password_hash($user_password, PASSWORD_BCRYPT);
    $query = "INSERT INaTO user (name, email, password) VALUES ('$user_name', '$user_email', '$hash_password')";
    
    if(mysqli_query($connection, $query)){
        echo "Registration successful!"; 
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form | Ramsha Shamim</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="wrapper">
      <form action="./index.php" method="post" class="form__a">
        <h2>Login</h2>

        <div class="input-field">
          <input type="email" name="user_email" required />
          <label>Enter your email</label>
        </div>
        <div class="input-field">
          <input type="password" name="user_password" required />
          <label>Enter your password</label>
        </div>
        <div class="forget">
          <label for="remember">
            <input type="checkbox" id="remember" />
            <p>Remember me</p>
          </label>
          <a href="#">Forgot password?</a>
        </div>
        <button type="submit" name="login_submit" value="login_submit">Log In</button>
      </form>
      <form action="./index.php" method="post" class="form__b hidden">
        <h2>Signup</h2>
        <div class="input-field">
          <input type="text" name="user_name" required />
          <label>Enter your name</label>
        </div>

        <div class="input-field">
          <input type="text" name="user_email" required />
          <label>Enter your email</label>
        </div>
        <div class="input-field">
          <input type="password" name="user_password" required />
          <label>Enter your password</label>
        </div>
        <div class="forget">
          <label for="remember">
            <input type="checkbox" id="remember" />
            <p>Remember me</p>
          </label>
          <a href="#">Forgot password?</a>
        </div>
        <button type="submit" name="signup_submit" value="signup_submit">Sign Up</button>
      </form>
      <div class="register">
        <button id="toggleButton">Switch Form</button>
      </div>
    </div>
    <script src="./index.js"></script>
  </body>
</html>
