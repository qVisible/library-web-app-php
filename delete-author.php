<html>
<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>

    <?php

$author_id=$_GET['author_id'];

$sql = 'DELETE FROM t_authors WHERE author_id='.$author_id;

if(mysqli_query($con,$sql)){
    echo 'A author has been deleted';
}
else{
    echo "Error deleting author record: " . mysqli_error($con);
}

?>

    <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
?>

</main></body>

</html>
