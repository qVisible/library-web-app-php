<?php require 'session.php'?><html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
    <meta http-equiv="refresh" content="1;url=show-members.php" />

</head>

<body>

    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>
        Bookmark Added
        <?php

            $member_id=$_GET['member_id'];


            if(!isset($_SESSION['bookmarks'])){
                $bookmarksArr = array(); //Create the bookmark array
                $_SESSION['bookmarks'] = $bookmarksArr; //Add the array to the Session Array
            }

            array_push($_SESSION['bookmarks'],$member_id);


        ?>
    </main>
</body>

</html>
