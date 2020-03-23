<?php require 'session.php'?><html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>

<body>
    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?>

    <main>

        <?php
         $book_fk=$_GET['book_id'];
         $copy=$_GET['copy'];
    
        if(!$copy==''){
                $sql='INSERT INTO t_copies (book_fk) VALUES ('.$book_fk.')';
                    
        if(mysqli_query($con,$sql)){
            echo 'copy has been inserted';
        }
        else{
            echo "Error inserting copy record: " . mysqli_error($con);
        }

                    
            }
    
         $sql='SELECT * FROM t_books JOIN t_authors ON author_id=author_fk WHERE book_id='.$book_fk;
    $result=mysqli_query($con,$sql); //execute query
    
    $row=mysqli_fetch_array($result);
     ?>


        <h1><?php echo $row['title'] ?></h1>
        Author: <?php echo $row['author_name'] ?><br>
        Book ID: <?php echo $row['book_id'] ?><br>



        <a href="show-copies.php?book_id=<?php echo $book_fk?>&copy=true"><img src="add-copy.png"></a>



        <h3>Copies Listed</h3>





        <table>
            <tr>
                <th>Copy ID</th>
                <th>Book ID</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
    
     

$sql="SELECT * FROM t_copies WHERE book_fk=".$book_fk; //get data from table


$result=mysqli_query($con,$sql); //execute query

while ($row=mysqli_fetch_array($result)){ //loop through rows from result
     echo '<tr>';
     echo '<td>'.$row['copy_id'].'</td>';
     echo '<td>'.$row['book_fk'].'</td>';
     echo '<td><a href="edit-author.php?author_id='.$row['copy_id'].'"><img src="edit.png"></a>
     </td>'; //edit author icon that also passes the author id
     echo '<td><a href="delete-author.php?author_id='.$row['copy_id'].'"><img src="delete.png"></a></td>';  //delete author icon that also passes the author id
     echo '</tr>';
    }

?>
        </table>


        <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con); //close the db connection
?>
    </main>
</body>

</html>
