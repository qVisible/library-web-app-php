<html>
    <body>

    <?php
    $con = mysqli_connect("localhost", "root", "root", "DB_LIBRARY");

    if (!$con) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    ?>

       <?php

        $book_id=$_GET['book_id'];

        $sql = 'SELECT * FROM t_books WHERE book_id='.$book_id;

        if($result=mysqli_query($con,$sql)){
            $row=mysqli_fetch_array($result);
            ?>

            <form action="update-book.php" method="post"><br>
            ID: <input type="text" value="<?php echo $row['book_id'] ?>"  name="book_id">
            Title: <input type="text" value="<?php echo $row['title'] ?>" size="70" name="title"> <br>
            ISBN:  <input type="text"  value="<?php  echo $row['isbn'] ?>"  name="isbn"><br>
            Date Published:  <input type="text"  value="<?php  echo $row['date_published'] ?>"  name="date_published"><br>
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
