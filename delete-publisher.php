<html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
    <meta http-equiv="refresh" content="1;url=show-publishers.php" />

</head>

<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>

        <?php

$publisher_id=$_GET['publisher_id'];

$sql = 'DELETE FROM t_publishers WHERE publisher_id='.$publisher_id;

if(mysqli_query($con,$sql)){
    echo 'A publisher has been deleted';
}
else{
    echo "Error deleting publisher record: " . mysqli_error($con);
}

?>

        <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
?>

    </main>
</body>

</html>
