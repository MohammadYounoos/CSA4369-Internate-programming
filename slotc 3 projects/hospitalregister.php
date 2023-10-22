<!DOCTYPE html>
<html>
<head>
    <title>Hospital</title>
</head>
<body style="background-color: red">
    <header>
        <h1>Hospitalregister:</h1>
    </header>
    <main>
 	 <div style="margin-left : 500px; margin-top: 200px; background-color: gold; margin-right: 500px; padding-left: 110px; padding-bottom: 4px; font-size: 30px; ">
        <form action="Hospital.php" method="post">
            <label for="Hospitalname">HospitalName:</label>
            <input type="text" id="name" name="name" ></br>
            <label for ="hospitalId">hospitalId:</label>
            <input type="hospitalId" id="Hospitalid" name="hospitalId"></br>
            <label for="HospitalLocation">HospitalLocation:</label>
            <input type="text" id="location" name="location" required></br>
           <input type="submit" value="Submit">
		</style>
        </form>
    </main>
</body>
</html>