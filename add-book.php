<html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>

<body>
    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>
        <form action="insert-book.php" method="post">
            <!--title input-->
            <label>book title</label>
            <input type="text" name="title" placeholder="Enter Book Title">

            <!--author input-->
            <label>author</label>
            <select name='author_fk'>
                <?php
                $sql='SELECT * FROM t_authors';        
                $result=mysqli_query($con,$sql);
                while ($row=mysqli_fetch_array($result)){
                    echo '<option value="'.$row['author_id'].'">'.$row['author_name'].'</option>';
                }
            ?>
            </select>

            <!--publisher input-->
            <label>publisher</label>
            <select name='publisher_fk'>
                <?php
                $sql='SELECT * FROM t_publishers';        
                $result=mysqli_query($con,$sql);
        
                while ($row=mysqli_fetch_array($result)){
                    echo '<option value="'.$row['publisher_id'].'">'.$row['publisher_name'].'</option>';
                }
            ?>
            </select>

            <!--isbn input-->
            <label>isbn</label> <input type="text" name="isbn" placeholder="Enter ISBN">

            <!--date input-->
            <label>date</label> <input type="date" name="date_published">

            <!--submit button-->
            <input type="submit" value="Create">
        </form>


        <?php
    mysqli_close($con);
    ?>
    </main>
</body>

</html>
