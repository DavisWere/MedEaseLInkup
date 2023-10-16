<?php
if (isset($_POST['submit'])) {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Create a database connection (replace with your database credentials)
    $conn = mysqli_connect("localhost", "root", "", "mel");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM patient WHERE email = ? LIMIT 1";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);

        if ($row && password_verify($password, $row["password"])) {
            // User found, log them in
            echo "Login successful!";
            header("Location:patient_dashboard.php");
            exit();
        } else {
            // User not found or password incorrect
            $error = "Invalid email or password.";
            echo $error;
        }

        mysqli_stmt_close($stmt);
    } else {
        // Error in preparing the SQL statement
        $error = "SQL statement preparation error.";
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title> 
    <link rel="stylesheet" href="patient.css">
   </head>
<body>
  <div class="wrapper">
    <h2>login</h2>
    <form method="post">
     
    
      
      <div class="input-box">
        <input type="email" name="email"placeholder="Enter your email" required>
      </div>

      
      <div class="input-box">
        <input type="password" name="password"placeholder="Enter your password" required>
      </div>
      
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="submit" name= "submit" value="Login Now">
      </div>
      <div class="text">
        <h3>You don't have an account? <a href="patientreg.php">Register now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>