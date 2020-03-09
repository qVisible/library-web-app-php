<nav>

    <div class="dropdown">
        <button class="dropbtn">Loans</button>
        <div class="dropdown-content">
            <a href="add-loan.php">Create</a>
            <a href="show-loans.php">Show</a>
        </div>
    </div>



    <div class="dropdown">
        <button class="dropbtn">Members</button>
        <div class="dropdown-content">
            <a href="show-members.php">Show</a>
            <a href="add-member.php">Add</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Books</button>
        <div class="dropdown-content">
            <a href="show-books.php">Show</a>
            <a href="add-book.php">Add</a>
        </div>
    </div>


    <div class="dropdown">
        <button class="dropbtn">Authors</button>
        <div class="dropdown-content">
            <a href="show-authors.php">Show</a>
            <a href="add-author.php">Add</a>
        </div>
    </div>

    <div class="dropdown">
        <button class="dropbtn">Publishers</button>
        <div class="dropdown-content">
            <a href="show-publishers.php">Show</a>
            <a href="add-publisher.php">Add</a>
        </div>
    </div>


    <div class="dropdown">
        <button class="dropbtn">Help</button>
        <div class="dropdown-content">
            <a href="get-code.php?filename=<?php
$currentFile = $_SERVER['PHP_SELF'];
$parts = Explode('/', $currentFile);
echo $parts[count($parts) - 1]; //Get the current filename and pass it to the Get Code Page
?>">Code</a>
            <a href="database-help.php">Database</a>
        </div>
    </div>


</nav>
