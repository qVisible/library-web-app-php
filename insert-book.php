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
