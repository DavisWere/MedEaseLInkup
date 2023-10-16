<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .container{
            /* background-color: rgb(62, 71, 116); */
            min-height: 100vh;
            min-width: 100vw;
            background-image: url(/images/doctor2.jpg);
            background-size: cover;
            border: 1px solid red;
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        #dropdown{
            width: 450px;
            height: 120px;
            border: none;
            background-image:url(doctor-1.jpg);
            border-radius: 30px;
            color: rgb(211, 211, 233);
            font-size: 20px;
            text-align: center;
        }
    </style>
</head>
<body style="margin: 0;">
    <div class="container" id="dropdown">
        <h2 style="color:black;">LOGIN AS</h2>
      
        <select style="background-color:black;color:black; "id="selectLocation" name="house_type" class="p-1 rounded-lg focus-none outline-none bg-white">
        <option value="http://localhost/MEL/mel/admin.php"> </option>
            <option value="admin.php">Admin</option>
            <option value="patientlogin.php">Patient/client</option>
            <option value="doc_login.php">Doctor</option>
        </select>
    </div>
    <script>
        document.getElementById('selectLocation').addEventListener('change', function() {
            window.location.href = this.value;
        });
    </script>
</body>

</html>