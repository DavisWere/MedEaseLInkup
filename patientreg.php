<?php
   $conn = mysqli_connect("localhost", "root", "", "mel");



   // Check the connection
   if (!$conn) {
	   die("Connection failed: " . mysqli_connect_error());
   }else
    {
		
   }

   // Check if the form has been submitted
   if (isset($_POST['submit'])) {
	   

        // Retrieve form data
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
		    $verify_password = password_hash($_POST["verify_password"], PASSWORD_DEFAULT);
        $country = $_POST["country"];
        $city = $_POST["city"];
        $national_id =$_POST["national_id"];
        $phone_number =$_POST["phone_number"];
        $current_location = $_POST["current_location"];
        $street = $_POST["street"];
        $gender =$_POST["gender"];
        
        
        
		
        // Insert data into the "doctor" table
		$sql = "INSERT INTO patient(first_name, last_name, email, password, verify_password, country, 
    city,national_id, phone_number, current_location, street, gender) 
		VALUES ('{$first_name}', '{$last_name}','{$email}','{$password}',
     '{$verify_password}','{$country}', '{$city}', '{$national_id}', '{$phone_number}', '{$current_location}', '{$street}', '{$gender}')";
        
		$create_post_query = mysqli_query($conn, $sql);
		if ($create_post_query) {
      header("Location: patient_dashboard.php");
		  exit();

		} else {
			die("Query failed".mysqli_error($conn));
		}

	
    }
    
    ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration </title> 
    <link rel="stylesheet" href="patient.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action=" " method="post" enctype="multipart/form-data">
      <div class="input-box">
        <input type="text" placeholder="Enter your first Name" name="first_name" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your last Name" name="last_name" required>
      </div>
      <div class="input-box">
         <label for="date of birth"> date of birth</label><input type="date" 
         placeholder="Enter your Date-Of-Birth" name="date_of_birth" required>
      </div>
      <label for="">Gender
      <input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female
</label>
      
      <div class="input-box">
        <input type="email" name="email"placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="text" name="national_id"placeholder="Enter Your Natiional_ID" required>
      </div>
      <div class="input-box">
        <input type="tel" name="phone_number" placeholder="Enter Your Phone_Number" maxlength="10"  required>
      </div>
      <div class="input-box">
        <input type="text" name="country" placeholder="Enter your country"  required>
      </div>
      <div class="input-box">
        <input type="text" name="street" placeholder=" Area of residence"   required>
      </div>
      <div class="input-box">
        <input type="text" name="city" placeholder="city"   required>
      </div>
      <div class="input-box">
        <input type="text" name="current_location" placeholder="current location"  required>
      </div>
      <div class="input-box"> <label for="password"> password</label>
        <input type="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="input-box"> <label for="verify_password"> confirm password</label>
        <input type="password" name="verify_password" placeholder="Confirm your password" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="submit" name="submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="patientlogin.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>