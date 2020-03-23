<?php require 'session.php'?><html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
    <meta http-equiv="refresh" content="1;url=show-loans.php" />

</head>

<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>

        <?php

$loan_id=$_GET['loan_id'];

$sql = 'DELETE FROM t_loans WHERE loan_id='.$loan_id;

if(mysqli_query($con,$sql)){
    echo 'A loan has been deleted';
}
else{
    echo "Error deleting loan record: " . mysqli_error($con);
}

?>

        <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
?>

    </main>
</body>

</html>
