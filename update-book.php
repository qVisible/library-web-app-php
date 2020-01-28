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
        $book_id=$_POST['book_id'];
        $title=$_POST['title'];
        $isbn=$_POST['isbn'];
        $date_published=$_POST['date_published'];

        $sql='UPDATE t_books SET title="'.$title.'", isbn="'.$isbn.'", date_published="'.$date_published.'" WHERE book_id='.$book_id;


        if(mysqli_query($con,$sql)){
            echo 'A Book has been updated';
        }
        else{
            echo "Error updating book record: " . mysqli_error($con);
        }

        ?>


        <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
?>
    </body>
</html>
