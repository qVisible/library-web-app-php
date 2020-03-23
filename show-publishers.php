<?php require 'session.php'?><html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>

<body>
    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>
        <div id="grid-container">
            <?php

$sql="SELECT * FROM t_publishers"; //get data from table

$result=mysqli_query($con,$sql); //execute query

while ($row=mysqli_fetch_array($result)){ //loop through rows from result
     echo '<div id="publisher" class="entity">';

     echo '<h1>'.$row['publisher_name'].'</h1>';
    echo '<div id="flex-container">';
    echo '<span id="id">id: '.$row['publisher_id'].'</span>';
     echo '<a href="edit-publisher.php?publisher_id='.$row['publisher_id'].'"><img src="edit.png"></a>
     '; //edit publisher icon that also passes the publisher id
     echo '<a href="delete-publisher.php?publisher_id='.$row['publisher_id'].'"><img src="delete.png"></a>';  //delete publisher icon that also passes the publisher id
     echo '</div>';
     echo '</div>';
    }

?>
        </div>

        <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con); //close the db connection
?>
    </main>
</body>

</html>
