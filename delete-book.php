<html>

<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?>

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

</body>

</html>
