<html>
<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>
<body>
    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>
    <form action="insert-loan.php" method="post">

       
<!--Create a Select Box populated from t_members table-->
        <p>
Member:
        <select name='member_fk'>
            <?php
                $sql='SELECT * FROM t_members';        
                $result=mysqli_query($con,$sql);
        
                while ($row=mysqli_fetch_array($result)){
                    echo '<option value="'.$row['member_id'].'">'.$row['forename'].' '.$row['surname'].'</option>';
                }
            ?>
        </select>
      </p> 
       
<!--Text box to take the copy number-->
        <p><input type="text" name="copy_fk" placeholder="Enter Copy Number"><br></p>

<!--Date field to take the date out-->   
        <p><input type="date" name="date_out"><br></p>
        

        <input type="submit" value="Create Loan">
    </form>


    <?php
    mysqli_close($con);
    ?>
</main></body>

</html>
