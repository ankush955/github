<?php
include('header.php');
require("connect-dbse.php");
session_start();
?>

<!--page admin login-->
<div data-role="page" data-theme="b" id="admin_login">
    <div data-role="header">
        <div data-role="navbar">
            <ul>
                <li><a href="#" data-rel="back" class="ui-icon-arrow-l ui-btn-icon-left">Go Back</a></li>
            </ul>
        </div>
        <h1>Login to QuakEarth</h1>
    </div>
    <div data-role="main" class="ui-content">
        <form method="post">
            <h3>ADMIN Sign In here</h3>
            <label for="ad_username">UserName</label>
            <input type="text" name="ad_username" id="ad_username">
            <label for="ad_password">Password</label>
            <input type="password" name="ad_password" id="ad_password">
            <button class="ui-btn ui-icon-arrow-r ui-btn-icon-right ui-nodisc-icon" name="admin_signin" id="admin_signin" type="submit">Sign in</button>
        </form>
    </div>
</div>
<?php

if (isset($_POST['admin_signin'])) {
/*      $ad_username = $_POST['ad_username'];
       $ad_password = $_POST['ad_password'];
       $admin_login = "SELECT admin_id FROM admin WHERE admin_userName = ? and admin_password = ?";
       $stmt = $connection->prepare($admin_login);
       $stmt->bind_param("ss", $ad_username, $ad_password);
       $stmt->execute();
       $stmt->bind_result($ADunid);
       $stmt->fetch();
       $stmt->close();

       if (!empty($ADunid)) {
           $_SESSION['ad_username'] = $ad_username;
           header("location:admin_home.php");
       } else {
           echo "<p>Account does not exist. Register first</p>";
       }
       $connection->close();*/

  $ad_username = $_POST['ad_username'];
    $ad_password = $_POST['ad_password'];
    if (($_POST['ad_username'] == "admin") && ($_POST['ad_password'] == "admin")) {
        $_SESSION['ad_username'] = $username;
        header('location:admin_home.php');

    }
}
?>
