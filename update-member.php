<html>

<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?>


    <?php
        $member_id=$_POST['member_id'];
        $forename=$_POST['forename'];
        $surname=$_POST['surname'];
        $address=$_POST['address'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];

        $sql='UPDATE t_members SET forename="'.$forename.'",  surname="'.$surname.'",address="'.$address.'", dob="'.$dob.'",  email="'.$email.'" WHERE member_id='.$member_id;


        if(mysqli_query($con,$sql)){
            echo 'A member has been updated';
        }
        else{
            echo "Error updating member record: " . mysqli_error($con);
        }

        ?>


    <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
?>
</body>

</html>
