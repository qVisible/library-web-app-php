<html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
    <meta http-equiv="refresh" content="1;url=show-books.php" />

</head>

<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>

        <?php

$book_id=$_GET['book_id'];

$sql = 'DELETE FROM t_books WHERE book_id='.$book_id;

if(mysqli_query($con,$sql)){
    echo 'A Book has been deleted';
}
else{
    echo "Error deleting book record: " . mysqli_error($con);
}

?>

        <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
?>

    </main>
</body>

</html>
