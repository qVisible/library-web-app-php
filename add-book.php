<html>
    <body>
        <?php require 'navbar.php'?>
        <form action="insert-book.php" method="post">
            <input type="text" name="title" placeholder="Enter Book Title"><br>
            <input type="text" name="isbn" placeholder="Enter ISBN"><br>
            <input type="date" name="date_published"><br>
            <input type="submit">
        </form>
    </body>
</html>
