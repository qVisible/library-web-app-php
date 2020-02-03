<html>

<body>
    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?>


    <?php
        $title=$_POST['title'];
        $isbn=$_POST['isbn'];
        $date_published=$_POST['date_published'];

        $sql='INSERT INTO t_books (title, isbn, date_published, author_fk, publisher_fk)
        VALUES ("'.$title.'", "'.$isbn.'","'.$date_published.'",0,0)';

        if(mysqli_query($con,$sql)){
            echo 'Book '.$title.' has been inserted';
        }
        else{
            echo "Error inserting book record: " . mysqli_error($con);
        }



        ?>


    <?php
            //All connections once you have used them for what you want should be closed
            mysqli_close($con);
        ?>
</body>

</html>
