<html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>

<body>

        <?php require 'db-connect.php'?>
        <?php require 'navbar.php'?><main>


        <?php
        $member_fk=$_POST['member_fk'];
        $copy_fk=$_POST['copy_fk'];
        $date_out=$_POST['date_out'];
      

        $sql='INSERT INTO t_loans (member_fk,copy_fk,date_out)
        VALUES ("'.$member_fk.'", "'.$copy_fk.'","'.$date_out.'")';

        if(mysqli_query($con,$sql)){
            echo 'Loan has been inserted';
        }
        else{
            echo "Error inserting book record: " . mysqli_error($con);
        }

        ?>


        <?php
            //All connections once you have used them for what you want should be closed
            mysqli_close($con);
        ?>
    
</main></body>

</html>
