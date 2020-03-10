<html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
    <meta http-equiv="refresh" content="1;url=show-publishers.php" />
</head>

<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>


        <?php
        $publisher_id=$_POST['publisher_id'];
        $publisher_name=$_POST['publisher_name'];

        $sql='UPDATE t_publishers SET publisher_name="'.$publisher_name.'" WHERE publisher_id='.$publisher_id;


        if(mysqli_query($con,$sql)){
            echo 'A publisher has been updated';
        }
        else{
            echo "Error updating publisher record: " . mysqli_error($con);
        }

        ?>


        <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
?>

    </main>
</body>

</html>
