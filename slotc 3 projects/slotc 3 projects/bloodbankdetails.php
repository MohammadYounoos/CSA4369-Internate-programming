<!DOCTYPE html>
<html>
<head>
    <title>DonorInfo</title>
</head>
<body style ="background-color: red">
    <main>
                 <div style="margin-left : 500px; margin-top: 200px; background-color: grey; margin-right: 500px; padding-left: 110px; padding-bottom: 4px; font-size: 30px; ">
        <form action="donor.php" method="post">
            <label for="BloodbankName">BloodbankName:</label>
            <input type="text" id="BloodbankName" name="BloodbankName" required></br>
            <label for="BloodbankId">BloodbankId:</label>
            <input type="BloodbankId" id="BloodbankId" name="BloodbankId" required></br>
            <label for="bloodgroupAvailable">bloodgroupavailable:</label>
            <select name="bloodgroups">
		<option value="O+">O+</option>
            <option value="O+">O+</option>
	<option value="O-">O-</option>
	<option value="A+">A+</option>
	<option value="A-">A-</option>
	<option value="B+">B+</option>
	<option value="B-">B-</option>
	<option value="AB+">AB+</option>
	<option value="AB-">AB-</option>
           <input type="submit" value="Submit">
</style>
        </form>
    </main>
</body>
</html>