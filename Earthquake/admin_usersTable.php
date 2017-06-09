<?php
include('header.php');
require("connect-dbse.php");
session_start();
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
        <h3>QuakEarth</h3>
    </div>
    <div data-role="main" class="ui-content">

        <h2 style="text-align: center">View and delete users here</h2>
        <?php
        $query = "SELECT * from user";
        $result = mysqli_query($connection, $query);
        echo "Query Executed Successfully ";
        $numRow = mysqli_num_rows($result);
        echo "<br> Number Of Rows:" . $numRow;
        ?>

        <table data-role="table" data-mode="reflow" class="ui-responsive"
               style="border: 2px solid grey;margin-top: 15px">
            <thead>
            <tr>
                <th data-priority="1">User ID</th>
                <th data-priority="1">User Name</th>
                <th data-priority="1">User Email</th>
                <th data-priority="1">Username</th>
                <th data-priority="1">User Password</th>
            </tr>
            </thead>
            <?php
            if ($numRow > 0) {
                foreach ($result as $user) { ?>
                    <tbody>
                    <tr>
                        <td><?php echo $user['user_id']; ?></td>
                        <td><?php echo $user['user_Name']; ?></td>
                        <td><?php echo $user['user_email']; ?></td>
                        <td><?php echo $user['user_Uname']; ?></td>
                        <td><?php echo $user['user_password']; ?></td>
                        <td>
                            <a href="delete_users_admin.php?id=<?php echo $user['user_id']; ?>"
                               data-transition="slide">Delete</a>
                        </td>
                    </tr>
                    </tbody>
                <?php }
            } else {
                echo "No results found";
            }; ?>
        </table>
    </div>
</div>


<?php
$query = "SELECT * from user";
$result = mysqli_query($connection, $query);
echo "Query Executed Successfully ";
$numRow = mysqli_num_rows($result);
echo "<br> Number Of Rows:" . $numRow;
?>

