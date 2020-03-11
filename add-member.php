<html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>

<body>
    <?php require 'navbar.php'?><main>
        <form action="insert-member.php" method="post">
            <label>forename</label>
            <input type="text" name="forename" placeholder="forename">
            <label>surname</label>
            <input type="text" name="surname" placeholder="surname"><label>address</label>
            <input type="text" name="address" placeholder="address"><label>date of birth</label>
            <input type="date" name="dob">
            <label>email</label>
            <input type="email" name="email" placeholder="email"><br>
            <input type="submit">
        </form>
    </main>
</body>

</html>
