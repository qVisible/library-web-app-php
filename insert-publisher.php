<html>
<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body>
    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>


    <?php
        $publisher_name=$_POST['publisher_name'];
    

        $sql='INSERT INTO t_publishers (publisher_name)
        VALUES ("'.$publisher_name.'")';

        if(mysqli_query($con,$sql)){
            echo 'publisher '.$publisher_name.' has been inserted';
        }
        else{
            echo "Error inserting publisher record: " . mysqli_error($con);
        }



        ?>


    <?php
            //All connections once you have used them for what you want should be closed
            mysqli_close($con);
        ?>
</main></body>

</html>
