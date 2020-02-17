<html>
<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body>
    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?>
    <form action="insert-book.php" method="post">
        <input type="text" name="title" placeholder="Enter Book Title"><br>

        <select name='author_fk'>
            <?php
                $sql='SELECT * FROM t_authors';        
                $result=mysqli_query($con,$sql);
        
                while ($row=mysqli_fetch_array($result)){
                    echo '<option value="'.$row['author_id'].'">'.$row['author_name'].'</option>';
                }
            ?>
        </select>
        <br>
        <input type="text" name="isbn" placeholder="Enter ISBN"><br>
        <input type="date" name="date_published"><br>
        <input type="submit">
    </form>


    <?php
    mysqli_close($con);
    ?>
</body>

</html>
