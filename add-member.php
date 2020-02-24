<html>
   <head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>
    <body>
        <?php require 'navbar.php'?><main>
        <form action="insert-member.php" method="post">
            <input type="text" name="forename" placeholder="forename"><br>
            <input type="text" name="surname" placeholder="surname"><br>
            <input type="text" name="address" placeholder="address"><br>
            <input type="date" name="dob" ><br>
            <input type="email" name="email" placeholder="email"><br>
            <input type="submit">
        </form>
    </main></body>
</html>
