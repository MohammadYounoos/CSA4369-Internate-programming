<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            background-color:white;
            text-align: center;
            padding: 20px;
            color: white;
        }

        form {
            text-align: left;
            padding: 20px;
            margin: 0 auto;
            max-width: 400px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1><b>Travel Agency</b></h1>
    <form action="register.php" method="post">
        <label for="name">Username:</label>
        <input type="text" id="name" name="Username" required>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <label for="Source">Source:</label>
        <input type="text" id="Source" name="Source" required>
        <label for="destination">Destination:</label>
        <input type="text" id="destination" name="destination" required>
        <label for="seatno">Seat No:</label>
        <input type="text" id="seatno" name="seatno" required>
        <input type="submit" value="Submit">
    </form>
   <?php
            if($_SERVER["REQUEST_METHOD"]== "POST"){
                $name=$_POST["Username"];
                $num=$_POST["email"];
                $password=$_POST["password"];
                $street=$_POST["Source"];
                $city=$_POST["destination"];
                $state=$_POST["seatno"];

                $conn=new mysqli("localhost","root","","younoos");

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "INSERT INTO userregister (username,email,password,Source,destination,seatno)
                    VALUES ('$name','$num','$password','$street','$city','$state')";
                    if ($conn->query($sql) === TRUE) {
                    $result="New Record Inserted Successfully";
                    } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
            }
        ?>
</body>
</html>
