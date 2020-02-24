<html>
<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>


    <?php
        $author_id=$_POST['author_id'];
        $author_name=$_POST['author_name'];

        $sql='UPDATE t_authors SET author_name="'.$author_name.'" WHERE author_id='.$author_id;


        if(mysqli_query($con,$sql)){
            echo 'A author has been updated';
        }
        else{
            echo "Error updating author record: " . mysqli_error($con);
        }

        ?>


    <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
?>
</main></body>

</html>
