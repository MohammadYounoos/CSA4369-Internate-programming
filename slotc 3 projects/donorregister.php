<html>
<head>
    <title>Donarregister</title>
</head>
<body background="younoos.jpeg">
    <header>
        <h1>Donar</h1>
    </header>
    <main>
        <div style="margin-left : 500px; margin-top: 200px; background-color: lightblue; margin-right: 500px; padding-left: 110px; padding-bottom: 4px; font-size: 30px; >
        <form action="donorregister.php" method="post">								
            
            <h1><b>Donar Info</b></h1>
            <label for="donarName">DonarName:</label>
            <input type="text" id="donarName" name="donarName"></br>
             <label for="email">Email:</label>
            <input type="email" id="email" name="email"></br>
            <label for ="password">password:</label>
            <input type="password" id="password" name="password"></br>
            <label for ="number">Number:</label>
            <input type="numbers" id="number" name="Number">
            <p>Blood group</p>
            <label for="GroupName">GroupName</label>
            <input type="text" id="GroupName" name="groupname"></br>
            <input type="submit" value="Submit"></br>
            </style>

        </form>
</div>
    </main>
<?php
            if($_SERVER["REQUEST_METHOD"]== "POST"){
                $name=$_POST["donarname"];
                $eamil=$_POST["email"];
                $password=$_POST["password"];
                $number=$_POST["number"];
                $groupname=$_POST["groupname"];
                $conn=new mysqli("localhost","root","","younoos");

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "INSERT INTO donorreg (donarname,email,password,number,groupname)
                    VALUES ('$donarname','$eamil','$password','$number','$groupname')";
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























