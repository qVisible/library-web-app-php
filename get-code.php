<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!--Get the filename and format it for the title of the page-->
    <title>
        <? echo  ucwords(str_replace('-',' ',basename($_SERVER["PHP_SELF"],'.php'))).' - College Admin'?>
    </title>
    <link href="style1.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrapper">
        <?php require_once('nav.php'); ?>

        <?php
$filename = $_GET['filename'] ;


if($filename!='db-connect.php'){
?>

            <h2>Show Code:
                <?php echo $filename  ?>
            </h2>
            <?php
highlight_file($filename );

}
else{
    echo '<h2>Sorry: Cant show code for file - too sensitive!</h2>';
}
?>


                <!--end wrapper div-->
    </div>
</body>

</html>
