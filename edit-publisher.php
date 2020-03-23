<?php require 'session.php'?><html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>

<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>

        <?php

        $publisher_id=$_GET['publisher_id'];

        $sql = 'SELECT * FROM t_publishers WHERE publisher_id='.$publisher_id;

        if($result=mysqli_query($con,$sql)){
            $row=mysqli_fetch_array($result);
            ?>

        <form action="update-publisher.php" method="post">
            <label>id</label>
            <input type="text" value="<?php echo $row['publisher_id'] ?>" name="publisher_id">

            <label>publisher name</label>
            <input type="text" value="<?php echo $row['publisher_name'] ?>" size="70" name="publisher_name">

            <input type="submit" value="change"><br>
        </form>

        <?php
        }
        else{
            echo "Error selecting publisher record: " . mysqli_error($con);
        }

?>


        <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
?>

    </main>
</body>

</html>
