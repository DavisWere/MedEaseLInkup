<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">	
    <title>MED-EASE</title>
</head>
<body >
    <!-- Both doctor and patient registration in one -->
    <div class="container">
      <div class="userTitle">
            <h1 id="patientlog">Patient Login</h1>
            <h1 id="doctorlog">Doctor Login</h1>
            <h1 id="stafflog">Staff Login</h1>
      </div>
      <div class="regContainers">
        <div class="patientLog">
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