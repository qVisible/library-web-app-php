<html>

<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?>

    <?php

        $member_id=$_GET['member_id'];

        $sql = 'SELECT * FROM t_members WHERE member_id='.$member_id;

        if($result=mysqli_query($con,$sql)){
            $row=mysqli_fetch_array($result);
            ?>

    <form action="update-member.php" method="post"><br>
        ID: <br>
        <input type="text" value="<?php echo $row['member_id'] ?>" name="member_id"><br>
        Forename:<br>
        <input type="text" value="<?php echo $row['forename'] ?>" size="70" name="forename"> <br>
        Surname:<br>
        <input type="text" value="<?php echo $row['surname'] ?>" size="70" name="surname"> <br>
        Address:  <br>
        <input type="text" value="<?php  echo $row['address'] ?>" name="address"><br>
        Date of Birth<br>
        <input type="text" value="<?php  echo $row['dob'] ?>" name="dob"><br>
        email:  <br>
        <input type="email" value="<?php  echo $row['email'] ?>" name="email"><br>
        <input type="submit" value="change"><br>
        <form>

            <?php
        }
        else{
            echo "Error selecting member record: " . mysqli_error($con);
        }

?>


            <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
?>





</body>

</html>