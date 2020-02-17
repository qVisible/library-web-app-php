<html>
<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body>
    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?>


    <?php
        $author_name=$_POST['author_name'];
    

        $sql='INSERT INTO t_authors (author_name)
        VALUES ("'.$author_name.'")';

        if(mysqli_query($con,$sql)){
            echo 'author '.$forename.' '.$surname.' has been inserted';
        }
        else{
            echo "Error inserting author record: " . mysqli_error($con);
        }



        ?>


    <?php
            //All connections once you have used them for what you want should be closed
            mysqli_close($con);
        ?>
</body>

</html>
