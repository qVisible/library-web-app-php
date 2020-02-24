<html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>

<body>

        <?php require 'db-connect.php'?>
        <?php require 'navbar.php'?><main>


        <?php
        $title=$_POST['title'];
        $isbn=$_POST['isbn'];
        $date_published=$_POST['date_published'];
        $author_fk=$_POST['author_fk'];

        $sql='INSERT INTO t_books (title, isbn, date_published, author_fk, publisher_fk)
        VALUES ("'.$title.'", "'.$isbn.'","'.$date_published.'",'.$author_fk.','.$publisher_fk.')';

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
    
</main></body>

</html>
