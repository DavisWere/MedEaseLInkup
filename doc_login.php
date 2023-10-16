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
    $sql = "SELECT * FROM doctor WHERE email = ? LIMIT 1";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);

        if ($row && password_verify($password, $row["password"])) {
            // User found, log them in
            echo "Login successful!";
            header("Location:doctor_dashboard.php");
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
    <link rel="stylesheet" href="/doctor.css">
    <style>
        .wrapper{
            text-align: center;
            background-color: whitesmoke;
            padding-top: 30px;
            padding-bottom: 30px;
            position: relative;
            height: 90vh;
            overflow-y: hidden;
        }
        h2{
            font-size: 25px;
            text-transform: uppercase;
            color: rgb(23, 28, 54);
        }
        form{
            border-radius: 25px;
            background-color: rgb(62, 71, 116);
            box-shadow: 3px 3px 15px black;
            color: white;
            width: 55%;
            text-align: left;
            margin: auto;
            font-size: 20px;
            padding: 20px;
        }
        .myInput{
            width: 90%;
            padding: 15px;
            margin-bottom: 5px;
            border-radius: 5px;
            border: none;
        }
        .container-wrap{
            text-align: center;
        }
        .policy{
            padding: 20px;
        }
        #btn{
            width: 200px;
            padding: 10px;
            border: none;
            border-radius: 10px;
            margin: 10px;
            font-weight: bolder;

        }
    
        </style>
   </head>
<body style="margin: 0;">
  <div class="wrapper">
    <h2>login</h2>
    <form class="flex flex-col gap-6" method="post">
     
    
      
      <div class="input-box">
        <label for="email">Email address:</label>
        <input class="myInput" type="email" name="email" placeholder="Enter your email.." required>
      </div>

      
      <div class="input-box">
        <label for="email">Password:</label>
        <input class="myInput" type="password" name="password"placeholder="Enter your password" required>
      </div>
      <div class="policy">
        <input style="display: inline-block;" type="checkbox">
        <span>I accept all terms & condition</span>
      </div>
      <div class="container-wrap">

          <div class="input-box button">
            <input id="btn" type="Submit" name="submit" value="LOGIN">
          </div>
          <div class="text">
            <div>Don't have an account? <a style="color: orange;" href="doc_reg.php">Register</a></div>
          </div>
      </div>
    </form>
  </div>
</body>
</html>