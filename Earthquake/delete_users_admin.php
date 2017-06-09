<?php
include('header.php');
require("connect-dbse.php");
?>
<?php
$user_id = $_GET['id'];
echo $user_id;
$query = "DELETE FROM user WHERE user_id = '$user_id'";
$result = mysqli_query($connection, $query);
?>
<div data-role="page" data-theme="b">
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
        <h1>QuakEarth</h1>
    </div>
    <div data-role="main" class="ui-content">
        <h1 style="text-align: center">User Successfully Deleted</h1>
    </div>
</div>