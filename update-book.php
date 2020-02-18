<html>
<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?>


    <?php
        $book_id=$_POST['book_id'];
        $title=$_POST['title'];
        $author_fk=$_POST['author_fk'];
        $isbn=$_POST['isbn'];
        $date_published=$_POST['date_published'];

        $sql='UPDATE t_books SET title="'.$title.'", author_fk="'.$author_fk.'", isbn="'.$isbn.'", date_published="'.$date_published.'" WHERE book_id='.$book_id;


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
