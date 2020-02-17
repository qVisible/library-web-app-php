<html>
<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?>

    <?php

        $author_id=$_GET['author_id'];

        $sql = 'SELECT * FROM t_authors WHERE author_id='.$author_id;

        if($result=mysqli_query($con,$sql)){
            $row=mysqli_fetch_array($result);
            ?>

    <form action="update-author.php" method="post"><br>
        ID: <br>
        <input type="text" value="<?php echo $row['author_id'] ?>" name="author_id"><br>
        Forename:<br>
        <input type="text" value="<?php echo $row['author_name'] ?>" size="70" name="author_name"> <br>
        <br>
        <input type="submit" value="change"><br>
    </form>

            <?php
        }
        else{
            echo "Error selecting author record: " . mysqli_error($con);
        }

?>


            <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
?>





</body>

</html>
