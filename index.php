<html>

<head>
    <link rel="stylesheet" href="style1.css" type="text/css">
</head>

<body>
    <?php require 'db-connect.php'?>
    <?php require 'navbar.php'?>
    <main>
        <?php
        $sql='SELECT COUNT(copy_id) AS copyCount FROM t_copies';

        $result=mysqli_query($con,$sql);

        $rowCopies = mysqli_fetch_array($result);

        $sql="SELECT COUNT(*) AS memberCount FROM t_members";

        $result=mysqli_query($con,$sql);

        $rowMembers = mysqli_fetch_array($result);

    ?>


        <p>
            Totals number of books:
            <?php
    echo $rowCopies['copyCount'];?><br> Totals number of members:
            <?php
    echo $rowMembers['memberCount'];?>

        </p>

    </main>
</body>

</html>
