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
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Doctor registration form </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="icons/styles.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">
		<link rel="stylesheet" href="css/registration-form.css">

		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="doc_reg.css">
	         <link rel="stylesheet" href="images/doctors.jpg">
		
	</head>
	<body>
		<div class="bg-img"></div>
		<!DOCTYPE html>
		<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doc</title>
    <style>
        .container{
            text-align: center;
            background-color: whitesmoke;
            padding-top: 30px;
            padding-bottom: 30px;
            position: relative;
        }
        h1{
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
        input{
            width: 90%;
            padding: 15px;
            margin-bottom: 5px;
            border-radius: 5px;
            border: none;
        }
    </style>
</head>
<body style="margin: 0;">
    <!-- Added .container div tag to enclose it -->
    <div class="container">
        <h1>Doctor Registration</h1>
        <form action=" " method="post" enctype="multipart/form-data">
            
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
    
            <input style="font-size: 20px;font-weight: bold;" type="submit"  name ="submit" value="Submit">

            <div style="padding: 10px;font-size: 17px;">Already Registered? <a href="doc_login.php" style="color: Orange;">Login</a></div>
        </form>
    </div>

</body>
</html>