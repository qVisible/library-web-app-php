<html>

<body>
    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?>


    <?php
        $forename=$_POST['forename'];
        $surname=$_POST['surname'];
        $address=$_POST['address'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];

        $sql='INSERT INTO t_members (forename,surname,address,dob,email)
        VALUES ("'.$forename.'", "'.$surname.'", "'.$address.'","'.$dob.'", "'.$email.'")';

        if(mysqli_query($con,$sql)){
            echo 'Member '.$forename.' '.$surname.' has been inserted';
        }
        else{
            echo "Error inserting member record: " . mysqli_error($con);
        }



        ?>


    <?php
            //All connections once you have used them for what you want should be closed
            mysqli_close($con);
        ?>
</body>

</html>