<?php require 'session.php'?><html>
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

$sql="SELECT * FROM t_authors"; //get data from table

$result=mysqli_query($con,$sql); //execute query

while ($row=mysqli_fetch_array($result)){ //loop through rows from result
     echo '<tr>';
     echo '<td>'.$row['author_id'].'</td>';
     echo '<td>'.$row['author_name'].'</td>';
     echo '<td><a href="edit-author.php?author_id='.$row['author_id'].'"><img src="edit.png"></a>
     </td>'; //edit author icon that also passes the author id
     echo '<td><a href="delete-author.php?author_id='.$row['author_id'].'"><img src="delete.png"></a></td>';  //delete author icon that also passes the author id
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
