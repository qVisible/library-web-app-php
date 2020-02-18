<html>
<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body>
    <?php require 'db-connect.php'?> 
    <?php require 'navbar.php'?>
    <table>
        <tr>
            <th>forename</th>
            <th>surname</th>
            <th>address</th>
            <th>date of birth</th>
            <th>email</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        <?php

$sql="SELECT * FROM t_members"; //get data from table

$result=mysqli_query($con,$sql); //execute query

while ($row=mysqli_fetch_array($result)){ //loop through rows from result
     echo '<tr>';
     echo '<td>'.$row['forename'].'</td>';
     echo '<td>'.$row['surname'].'</td>';
     echo '<td>'.$row['address'].'</td>';
     echo '<td>'.$row['dob'].'</td>';
     echo '<td>'.$row['email'].'</td>';
     echo '<td><a href="edit-member.php?member_id='.$row['member_id'].'"><img src="edit.png"></a>
     </td>'; //edit member icon that also passes the member id
     echo '<td><a href="delete-member.php?member_id='.$row['member_id'].'"><img src="delete.png"></a></td>';  //delete member icon that also passes the member id
     echo '</tr>';
    }

?>
    </table>

    <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con); //close the db connection
?>
</body>

</html>
