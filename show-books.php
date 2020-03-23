<?php require 'session.php'?><html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>

<body>
    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>
        <table>
            <tr>
                <th>Book Title</th>
                <th>ISBN</th>
                <th>Date Published</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Copies</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php

$sql="SELECT * FROM t_books JOIN t_authors ON author_id=author_fk JOIN t_publishers ON publisher_id=publisher_fk";

$result=mysqli_query($con,$sql);

while ($row=mysqli_fetch_array($result)){
     echo '<tr>';
     echo '<td>'.$row['title'].'</td>';
     echo '<td>'.$row['isbn'].'</td>';
     echo '<td>'.$row['date_published'].'</td>';
     echo '<td>'.$row['author_name'].'</td>';
     echo '<td>'.$row['publisher_name'].'</td>';
    
     //Generating count value for the number of copies a book has
     $sqlCopies="SELECT COUNT(copy_id) AS countCopies FROM t_copies WHERE book_fk=".$row['book_id'];
     $resultCopies=mysqli_query($con,$sqlCopies);
     $rowCopies=mysqli_fetch_array($resultCopies);
     echo '<td><a href="show-copies.php?book_id='.$row['book_id'].'">'.$rowCopies['countCopies'].'</a></td>';
    
     //edit link
     echo '<td><a href="edit-book.php?book_id='.$row['book_id'].'"><img src="edit.png"></a>
     </td>';
    
     //delete link
     echo '<td><a href="delete-book.php?book_id='.$row['book_id'].'"><img src="delete.png"></a></td>';
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
