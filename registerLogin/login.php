<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">	
    <title>MED-EASE</title>
</head>
<body >
    <!-- Both doctor and patient registration in one -->
    <div class="container" style="height: 94vh;display: flex;flex-direction: column; align-content: center;">
      <div class="userTitle">
            <h1 id="patientlog">Patient Login</h1>
            <h1 id="doctorlog">Doctor Login</h1>
            <h1 id="stafflog">Staff Login</h1>
      </div>
      <div class="regContainers"  style="margin-bottom: 30px;margin-top: -30px;">
        <div class="patientLog">
          <!-- patient login -->
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
              <!-- ==== end ==== -->
            <h2 style="text-align: center;">PATIENT</h2>
              <label for="email" id="email">Email: </label><br>
              <input type="email" name="email" id="email" placeholder="Email address.."><br>
              <label for="password" id="password">Password: </label><br>
              <input type="password" name="password" id="password" placeholder="Password"><br>
              <input id="logbtn" type="submit" name="submit" value="LOGIN">
            <span>Don't have an account? <a href="register.php" style="color: Orange;">Register</a></span>
            </form>
        </div>
        <div class="docLog">
          <!-- doctor start -->
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
                            header("Location: doctor/doctor_dashboard.php");
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
<!-- ==== doc end ==== -->
          <form action=" " method="post" enctype="multipart/form-data">
              <h2 style="text-align: center;">DOCTOR</h2>
              <label for="email" id="email">Email:</label><br>
                <input type="email" name="email" id="email" placeholder="Email address.."><br>
                <label for="password" id="password">Password: </label><br>
                <input type="password" name="password" id="password" placeholder="Password"><br>
                <input id="logbtn" type="submit" name="submit" value="LOGIN">
              <span>Don't have an account? <a href="register.php" style="color: Orange;">Register</a></span>
          </form>
        </div>
        <div class="staffLog">
          <form action=" " method="post" enctype="multipart/form-data">
              <h2 style="text-align: center;">STAFF</h2>
              <label for="email" id="email">Email:</label><br>
                <input type="email" name="email" id="email" placeholder="Email address.."><br>
                <label for="password" id="password">Password: </label><br>
                <input type="password" name="password" id="password" placeholder="Password"><br>
                <input id="logbtn" type="submit" name="submit" value="LOGIN">
              <span>Don't have an account? <a href="register.php" style="color: Orange;">Register</a></span>
          </form>
        </div>
      </div>
    </div>

        <script src="login.js"></script>
</body>
</html>