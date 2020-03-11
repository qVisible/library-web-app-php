<html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>

<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?>

    <main>

        <?php

        $member_id=$_GET['member_id'];

        $sql = 'SELECT * FROM t_members WHERE member_id='.$member_id;

        if($result=mysqli_query($con,$sql)){
            $row=mysqli_fetch_array($result);
            ?>

        <form action="update-member.php" method="post" enctype="multipart/form-data">
            <label>id</label>
            <input type="text" value="<?php echo $row['member_id'] ?>" name="member_id">

            <label>forename</label>
            <input type="text" value="<?php echo $row['forename'] ?>" size="70" name="forename">

            <label>surname</label>
            <input type="text" value="<?php echo $row['surname'] ?>" size="70" name="surname">

            <label>address</label>
            <input type="text" value="<?php  echo $row['address'] ?>" name="address">

            <label>date of birth</label>
            <input type="text" value="<?php  echo $row['dob'] ?>" name="dob">

            <label>email</label>
            <input type="email" value="<?php  echo $row['email'] ?>" name="email">

            <label>Select image to upload:</label>
            <input type="file" name="fileToUpload" id="fileToUpload">


            <input type="submit" value="Update Member">
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





    </main>
</body>

</html>
