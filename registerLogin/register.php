<?php
//    $conn = mysqli_connect("localhost", "root", "", "mel");



//    // Check the connection
//    if (!$conn) {
// 	   die("Connection failed: " . mysqli_connect_error());
//    }else
//     {
		
//    }

//    // Check if the form has been submitted
//    if (isset($_POST['submit'])) {
	   

//         // Retrieve form data
//         $first_name = $_POST["first_name"];
//         $last_name = $_POST["last_name"];
//         $email = $_POST["email"];
//         $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
// 		$verify_password = password_hash($_POST["verify_password"], PASSWORD_DEFAULT);
//         $country = $_POST["country"];
//         $city = $_POST["city"];
//         $medical_id = $_POST["medical_id"];
//         $medical_school = $_POST["medical_school"];
//         $qualification = $_POST["qualification"];
//         $image = $_FILES["image"]["name"];
// 		$target = "images/".basename($image);
//         // Insert data into the "doctor" table
// 		$sql = "INSERT INTO doctor(first_name, last_name, email, password, verify_password, country, city,medical_id, medical_school, qualification, image) 
// 		VALUES ('$first_name', '$last_name','$email','$password', '$verify_password','$country', '$city', '$medical_id', '$medical_school', '$qualification', '$image')";
        
// 		$create_post_query = mysqli_query($conn, $sql);
// 		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
// 			$msg = "Image uploaded successfully";
// 			 // Redirect to wait.php
// 		  header("Location:doctor_dashboard.php");
// 		  exit();
	  
// 		}else{
// 			$msg = "Failed to upload image";
// 		}
// 		if ($create_post_query) {

// 			echo "data added";
// 		} else {
// 			die("Query failed".mysqli_error($conn));
// 		}

	
//     }
    
    ?>
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
            <h1 id="patient">Patient Registration</h1> /
            <h1 id="doctor">Doctor Registration</h1>
      </div>
      <div class="regContainers">
        <div class="docReg">
          <!-- Doctor start -->
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
                      $medical_id = $_POST["medical_id"];
                      $medical_school = $_POST["medical_school"];
                      $qualification = $_POST["qualification"];
                      $image = $_FILES["image"]["name"];
                  $target = "images/".basename($image);
                      // Insert data into the "doctor" table
                  $sql = "INSERT INTO doctor(first_name, last_name, email, password, verify_password, country, city,medical_id, medical_school, qualification, image) 
                  VALUES ('$first_name', '$last_name','$email','$password', '$verify_password','$country', '$city', '$medical_id', '$medical_school', '$qualification', '$image')";

                  $create_post_query = mysqli_query($conn, $sql);
                  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    $msg = "Image uploaded successfully";
                    // Redirect to wait.php
                    header("Location:doctor_dashboard.php");
                    exit();

                  }else{
                    $msg = "Failed to upload image";
                  }
                  if ($create_post_query) {

                    echo "data added";
                  } else {
                    die("Query failed".mysqli_error($conn));
                  }


                  }

                  ?>
    <!-- ==== doctor end -->
        <form action=" " method="post" enctype="multipart/form-data">
            <h2 style="text-align: center;">DOCTOR</h2>
            <label for="first_name">First Name:</label><br>
            <input type="text" id="first_name" name="first_name" placeholder="Enter First Name.." required><br><br>
    
            <label for="last_name">Last Name:</label><br>
            <input type="text" id="last_name" name="last_name" placeholder="Enter Last Name.." required><br><br>
    
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="Enter Your Email.." required><br><br>
    
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="Input password.." required><br><br>
            <label for="verify password"> Confirm Password:</label><br>
            <input type="password" id="password" name="verify_password" placeholder="Confirm password.." required><br><br>

    
            <label for="country">Country:</label><br>
            <input type="text" id="country" name="country" placeholder="Country of Origin.." required><br><br>
    
            <label for="city">City:</label><br>
            <input type="text" id="city" name="city" placeholder="Enter City.." required><br><br>
    
            <label for="medical_id">Medical ID:</label><br>
            <input type="text" id="medical_id" name="medical_id" placeholder="Input Medical ID Number.." required><br><br>
    
            <label for="medical_school">Medical School:</label><br>
            <input type="text" id="medical_school" name="medical_school" placeholder="Medical school attended.." required><br><br>
    
            <label for="qualification">Qualification:</label><br>
            <input type="file" id="qualification" name="qualification" placeholder="Academic Qualifications.." required><br><br>
    
            <label for="image">Profile Image:</label><br>
            <input type="file" id="image" name="image" accept="image/*" required><br><br>
    
            <input id="regbtn" type="submit"  name ="submit" value="REGISTER">

            <span>Already Registered? <a href="login.php" style="color: Orange;">Login</a></span>
        </form>
        </div>
        <div class="patientReg">
          <!-- Patient register -->
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
                  <!-- ==== patient end ==== -->
            <h2 style="text-align: center;">PATIENT</h2>
            <form action=" " method="post" enctype="multipart/form-data">
              <label for="firstname">First Name: </label><br>
                <input type="text" placeholder="Enter your first Name" name="first_name" required><br>
              <label for="lastname">Last Name: </label><br>
                <input type="text" placeholder="Enter your last Name" name="last_name" required><br>
              <label for="date of birth">Date of Birth: </label><br>
                <input type="date" placeholder="Enter your Date-Of-Birth" name="date_of_birth" required><br>
              <label for="">Gender: <br>
                <input style="width: 17px;height: 17px;margin:.5em;" type="radio" name="gender" value="male"> Male <br> 
                <input style="width: 17px;height: 17px;margin:.5em;" type="radio" name="gender" value="female"> Female 
              </label><br>
              <label for="email">Email Address:</label><br>
                <input type="email" name="email"placeholder="Enter your email" required><br>
              <label for="nationalId">National ID Number:</label><br>
                <input type="text" name="national_id"placeholder="Enter Your Natiional_ID" required><br>
              <label for="phoneNumber">Phone Number:</label><br>
                <input type="tel" name="phone_number" placeholder="Enter Your Phone_Number" maxlength="10"  required><br>
              <label for="country">Nationality:</label><br>
                <input type="text" name="country" placeholder="Enter your country"  required><br>
              <label for="street">Street:</label><br>
                <input type="text" name="street" placeholder=" Area of residence"><br>
              <label for="city">City: </label><br>
                <input type="text" name="city" placeholder="city"   required><br>
              <label for="currentlocation">Current Location:</label><br>
                <input type="text" name="current_location" placeholder="current location"  required><br>
              <label for="password">Password:</label><br>
                <input type="password" name="password" placeholder="Enter your password" required><br>
              <label for="verify_password">Confirm password:</label><br>
                <input type="password" name="verify_password" placeholder="Confirm your password" required><br>
 
                <input style="width: 17px;height: 17px;margin:.5em;" type="checkbox" name="check" id="check" checked required><small>I accept all Terms & Conditions</small><br>

                <input id="regbtn" type="submit" name="submit" value="REGISTER">

                <span>Already have an account? <a href="login.php" style="color: Orange;">Login</a></span>

            </form>
        </div>
      </div>
    </div>

    <script>
            // Function to validate the form
            function validateForm() {
                var password = document.getElementById("password").value;
                var verifyPassword = document.getElementById("verify_password").value;
    
                if (password !== verifyPassword) {
                    alert("Password and Verify Password must match.");
                    return false;
                }
    
                return true;
            }
        </script>
        <script src="register.js"></script>
</body>
</html>