<!DOCTYPE html>
<html>
<head>
    <title>DonorInfo</title>
</head>
<body style="background-color: red">
   <p><b>Donor Info</b></p>
    <main>
                 <div style="margin-left : 500px; margin-top: 200px; background-color: green; margin-right: 500px; padding-left: 110px; padding-bottom: 4px; font-size: 30px; ">
        <form action="donor.php" method="post">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required></br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required></br>
            <label for="bloodgroup">bloodgroup:</label>
            <input type="text" id="bloodgroup" name="bloodgroup" required></br>
            <label for="number">number:</label>
            <input type="number" id="number" name="number" required></br>
            <input type="submit" value="Submit">
 		</style>
        </form>
    </main>
</body>
</html>