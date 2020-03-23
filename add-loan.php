<?php require 'session.php'?><html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>

<body>
    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?><main>
        <form action="insert-loan.php" method="post">


            <!--Create a Select Box populated from t_members table-->

            <label>member</label>
            <select name='member_fk'>
                <?php
                $sql='SELECT * FROM t_members';        
                $result=mysqli_query($con,$sql);
        
                while ($row=mysqli_fetch_array($result)){
                    echo '<option value="'.$row['member_id'].'">'.$row['forename'].' '.$row['surname'].'</option>';
                }
            ?>
            </select>


            <!--Text box to take the copy number-->
            <label>copy number</label><input type="text" name="copy_fk" placeholder="Enter Copy Number">

            <!--Date field to take the date out-->
            <label>date out</label><input type="date" name="date_out">


            <input type="submit" value="Create Loan">
        </form>


        <?php
    mysqli_close($con);
    ?>
    </main>
</body>

</html>
