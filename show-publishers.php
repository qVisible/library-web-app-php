<html>
<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body>
    <?php require 'db-connect.php'?> 
    <?php require 'navbar.php'?><main>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php

$sql="SELECT * FROM t_publishers"; //get data from table

$result=mysqli_query($con,$sql); //execute query

while ($row=mysqli_fetch_array($result)){ //loop through rows from result
     echo '<tr>';
     echo '<td>'.$row['publisher_id'].'</td>';
     echo '<td>'.$row['publisher_name'].'</td>';
     echo '<td><a href="edit-publisher.php?publisher_id='.$row['publisher_id'].'"><img src="edit.png"></a>
     </td>'; //edit publisher icon that also passes the publisher id
     echo '<td><a href="delete-publisher.php?publisher_id='.$row['publisher_id'].'"><img src="delete.png"></a></td>';  //delete publisher icon that also passes the publisher id
     echo '</tr>';
    }

?>
    </table>

    <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con); //close the db connection
?>
</main></body>

</html>
