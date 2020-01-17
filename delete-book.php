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
$sql = 'DELETE FROM t_books WHERE book_id=4';

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
