<?php require 'session.php'?><html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
    <meta http-equiv="refresh" content="1;url=show-members.php" />
</head>

<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>


        <?php
        $member_id=$_POST['member_id'];
        $forename=$_POST['forename'];
        $surname=$_POST['surname'];
        $address=$_POST['address'];
        $dob=$_POST['dob'];
        $email=$_POST['email'];

    ?>
        <!--Upload Member Image-->
        <?php


$target_dir = "member-images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>



        <!--     End Upload student Image-->

        <?php

        $sql='UPDATE t_members SET forename="'.$forename.'",  surname="'.$surname.'",address="'.$address.'", dob="'.$dob.'",  email="'.$email.'", image="'.$_FILES['fileToUpload']['name'].'" WHERE member_id='.$member_id;

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
    </main>
</body>

</html>
