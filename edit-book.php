<?php require 'session.php'?><html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>

<body>


    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>

        <?php

        $book_id=$_GET['book_id'];

        $sql = 'SELECT * FROM t_books WHERE book_id='.$book_id;

        if($result=mysqli_query($con,$sql)){
            $rowBooks =mysqli_fetch_array($result);
            ?>

        <form action="update-book.php" method="post">
            <label>ID:</label>
            <input type="text" value="<?php echo $rowBooks['book_id'] ?>" name="book_id">


            <label>Title:</label>
            <input type="text" value="<?php echo $rowBooks['title'] ?>" size="70" name="title">

            <label>author</label>
            <select name='author_fk'>
                <?php
                $sql='SELECT * FROM t_authors';        
                $result=mysqli_query($con,$sql);
        
                while ($rowAuthors=mysqli_fetch_array($result)){
                    echo '<option value="'.$rowAuthors['author_id'].'"';
                    
                    //insert selected attribute in option that is the selected books author
                    if($rowAuthors['author_id']==$rowBooks['author_fk']){
                        echo ' selected ';
                    }
                    
                    echo '>'.$rowAuthors['author_name'].'</option>';
                }
            ?>
            </select>

            <label>Publisher:</label>
            <select name='publisher_fk'>
                <?php
                $sql='SELECT * FROM t_publishers';        
                $result=mysqli_query($con,$sql);
        
                while ($rowPublishers=mysqli_fetch_array($result)){
                    echo '<option value="'.$rowPublishers['publisher_id'].'"';
                    
                    //insert selected attribute in option that is the selected books author
                    if($rowPublishers['publisher_id']==$rowBooks['publisher_fk']){
                        echo ' selected ';
                    }
                    
                    echo '>'.$rowPublishers['publisher_name'].'</option>';
                }
            ?>
            </select>




            <label>isbn</label>
            <input type="text" value="<?php  echo $rowBooks['isbn'] ?>" name="isbn">

            <label>Date Published:</label>
            <input type="text" value="<?php  echo $rowBooks['date_published'] ?>" name="date_published">

            <input type="submit" value="change">

            <form>

                <?php
        }
        else{
            echo "Error selecting book record: " . mysqli_error($con);
        }

?>


                <?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
?>





    </main>
</body>

</html>
