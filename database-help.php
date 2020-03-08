<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!--Get the filename and format it for the title of the page-->
    <title>
        <? echo  ucwords(str_replace('-',' ',basename($_SERVER["PHP_SELF"],'.php'))).' - College Admin'?>
    </title>
    <link href="style1.css" rel="stylesheet" type="text/css" />
</head>

<body>
     <?php require_once('navbar.php'); ?>
    <main>
        <h2>Database Diagram</h2>
    <img src="lab20-db-schema.png">


        <h2>SQL Dump
        </h2>
        <?php
highlight_file('DB_LIBRARY_Export_books_members_authors_publsihers_loans_tables.sql');

?>


        <!--end wrapper div-->
    </main>
</body>

</html>
