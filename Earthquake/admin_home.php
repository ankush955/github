<?php
include('header.php');
require("connect-dbse.php");
session_start();
?>

<div data-role="page" id="user_home" data-theme="b">
    <div data-role="header">
        <div data-role="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="admin_usersTable.php">View Users</a></li>
                <li><a href="#">View Earthquakes</a></li>
                <li><a href="#">Upload Files</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>

    <div data-role="main" class="ui-content">
        <p><?php echo "<h2>QuakEarth Admin Panel</h2>";?></p>
    </div>
</div>

