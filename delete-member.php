<html>

<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?>

    <?php

$member_id=$_GET['member_id'];

$sql = 'DELETE FROM t_members WHERE member_id='.$member_id;

if(mysqli_query($con,$sql)){
    echo 'A member has been deleted';
}
else{
    echo "Error deleting member record: " . mysqli_error($con);
}

?>

    <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
?>

</body>

</html>