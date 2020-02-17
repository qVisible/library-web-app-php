<html>
<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?>

    <?php

        $book_id=$_GET['book_id'];

        $sql = 'SELECT * FROM t_books WHERE book_id='.$book_id;

        if($result=mysqli_query($con,$sql)){
            $row=mysqli_fetch_array($result);
            ?>

    <form action="update-book.php" method="post"><br>
        ID: <input type="text" value="<?php echo $row['book_id'] ?>" name="book_id"><br>
        Title: <input type="text" value="<?php echo $row['title'] ?>" size="70" name="title"> <br>
        ISBN: <input type="text" value="<?php  echo $row['isbn'] ?>" name="isbn"><br>
        Date Published: <input type="text" value="<?php  echo $row['date_published'] ?>" name="date_published"><br>
        <input type="submit" value="change"><br>
        <form>

            <?php
        }
        else{
            echo "Error selecting book record: " . mysqli_error($con);
        }

?>


            <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
?>





</body>

</html>
