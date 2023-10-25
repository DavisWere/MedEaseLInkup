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
   //Adding a comment//


  } else {
    // User not found or password incorrect
    $error = "Invalid email or password.";
  }
}
?>