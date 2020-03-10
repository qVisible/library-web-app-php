<html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
    <meta http-equiv="refresh" content="1;url=show-members.php" />

</head>

<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>

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

    </main>
</body>

</html>
