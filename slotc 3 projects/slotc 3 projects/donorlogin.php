
3<!DOCTYPE html>
<html>
<head>
    <title>Donar</title>
</head>
<body style="background-color: red">
    <p><b>donor login</b></p>
    <main>
        <div style="margin-left : 500px; margin-top: 200px; background-color: yellow; margin-right: 500px; padding-left: 110px; padding-bottom: 4px; font-size: 30px; ">
        <form action="Donar.php" method="post">
            <label for="donarName">DonarName:</label>
            <input type="text" id="donarName" name="donarName" required></br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required></br>
            <label for ="password">password:</label>
            <input type="password" id="password" name="password" required></br>
            <input type="submit" value="Submit">
          </style>
        </form>
    </main>
</body>
</html>