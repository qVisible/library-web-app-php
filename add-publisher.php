<?php require 'session.php'?><html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>

<body>
    <?php require 'navbar.php'?>
    <main>
        <form action="insert-publisher.php" method="post">
            <label>name</label>
            <input type="text" name="publisher_name" placeholder="publisher Name"><br>
            <input type="submit">
        </form>
    </main>
</body>

</html>
