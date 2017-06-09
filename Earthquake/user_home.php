<?php
include('header.php');
require("connect-dbse.php");
session_start();
?>

<div data-role="page" data-theme="b">
    <div data-role="header">
        <div data-role="navbar">
            <ul>
                <li><a href="user_home.php">User Home</a></li>
                <li><a href="#">View Earthquakes</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <h1>QuakEarth</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p><?php echo "<h2>User <i>".$_SESSION['username']."</i> logged in</h2>";?></p>
    </div>
</div>


<?php
include('footer.php');
?>
