<?php
 $conn = mysqli_connect("localhost", "root", "", "mel");
if (isset($_POST['submit'])) {
  // Retrieve form data
  $email = $_POST["email"];
  $password = $_POST["password"];
  
  // Check if user exists in database
  $sql = "SELECT * FROM support_staff WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  
  if (mysqli_num_rows($result) == 1) {
    // User found, log them in
    $success = "Login successful!";
    header ("location:support_staff.php");

    
  } else {
    // User not found or password incorrect
    $error = "Invalid email or password.";
  }
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>support staff login page</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="login-form-wrap">
  <h2> support staff Login</h2>
  <form  method="post">
    <p>
    <input type="email" id="username" name="email" placeholder="email" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="email" name="password" placeholder="password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="login" name="submit" value="Login">
    </p>
  </form>
  <div id="create-account-wrap">
    
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
<!-- partial -->


</script>

</body>
</html>
