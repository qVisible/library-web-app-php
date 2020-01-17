<html>
   <head>
       <link rel="stylesheet" href="style1.css" type="text/css">
   </head>
    <body>
<?php
$con = mysqli_connect("localhost", "root", "root", "DB_LIBRARY");

if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>
<table>
<tr>
    <th>Book Title</th>
    <th>ISBN</th>
    <th>Date Published</th>
</tr>
<?php

$sql="SELECT * FROM t_books";

$result=mysqli_query($con,$sql);

while ($row=mysqli_fetch_array($result)){
     echo '<tr>';
     echo '<td>'.$row['title'].'</td>';
     echo '<td>'.$row['isbn'].'</td>';
     echo '<td>'.$row['date_published'].'</td>';
     echo '</tr>';
    }

?>
</table>

<?php
    //All connections once you have used them for what you want should be closed
    mysqli_close($con);
?>
    </body>
</html>
