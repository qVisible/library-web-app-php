<html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>

<body>
    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>
        <table>
            <tr>
                <th>ID </th>
                <th>Member </th>
                <th>Copy #</th>
                <th>book</th>
                <th>date out</th>
                <th>date return</th>

                <th>Delete</th>
            </tr>
            <?php

if(!$_GET['loan_id']==''){
    $loan_id=$_GET['loan_id'];
    $sql='UPDATE t_loans SET date_returned="'.date('Y.m.d').'" WHERE loan_id='.$loan_id;

       if(mysqli_query($con,$sql)){
            echo 'Book Returned';
        }
        else{
            echo "Error returning book: " . mysqli_error($con);
        }

}

$sql="SELECT * FROM t_loans JOIN t_copies ON copy_fk=copy_id JOIN t_books ON book_fk=book_id JOIN t_members ON member_fk=member_id";

$result=mysqli_query($con,$sql);

while ($row=mysqli_fetch_array($result)){
     echo '<tr>';
     echo '<td>'.$row['loan_id'].'</td>';
      echo '<td>'.$row['forename'].' '.$row['surname'].'</td>';
     echo '<td>'.$row['copy_fk'].'</td>';
     echo '<td>'.$row['title'].'</td>';
     echo '<td>'.$row['date_out'].'</td>';
    if(!$row['date_returned']==''){
     echo '<td>'.$row['date_returned'].'</td>';
    }
    else{
        echo '<td><a href="show-loans.php?loan_id='.$row['loan_id'].'">Return Now</a></td>';
    }

  //delete link
  echo '<td><a href="delete-loan.php?loan_id='.$row['loan_id'].'"><img src="delete.png"></a></td>';
  echo '</tr>';
    }

?>
        </table>

        <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
?>
    </main>
</body>

</html>
