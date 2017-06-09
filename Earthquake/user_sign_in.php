<?php
include('header.php');
require("connect-dbse.php");
session_start();
?>



<div data-role="page" data-theme="b" id="user_login">
    <div data-role="header">
        <div data-role="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Page Two</a></li>
                <li><a href="#">Search</a></li>
            </ul>
        </div>
        <h1>Login to Earthquake</h1>
    </div>

    <div data-role="main" class="ui-content">
        <form method="post">
            <h3>USER Sign In here</h3>
            <label for="username">UserName</label>
            <input type="text" name="username" id="username">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button class="ui-btn" name="user_signin" id="user_signin" type="submit">Sign in</button>
        </form>
    </div>
</div>

<!--<div data-role="page" data-theme="b" id="admin_login">
    <div data-role="header">
        <div data-role="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Page Two</a></li>
                <li><a href="#">Search</a></li>
            </ul>
        </div>
        <h1>Login to Earthquake</h1>
    </div>
    <div data-role="main" class="ui-content">
        <form method="post">
            <h3>ADMIN Sign In here</h3>
            <label for="ad_username">UserName</label>
            <input type="text" name="ad_username" id="ad_username">
            <label for="ad_password">Password</label>
            <input type="password" name="ad_password" id="ad_password">
            <button class="ui-btn" name="admin_signin" id="admin_signin" type="submit">Sign in</button>
        </form>
    </div>
</div>-->


<?php
if (isset($_POST['user_signin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql_login = "SELECT user_id FROM user WHERE user_Uname = ? and user_password = ?";
    $stmt = $connection->prepare($sql_login);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->bind_result($unid);
    $stmt->fetch();
    $stmt->close();

    if (!empty($unid)) {
        $_SESSION['username'] = $username;
        header("location:user_home.php");
    } else {
        echo "<p>Account does not exist. Register first</p>";
    }
    $connection->close();
}
?>

<?php
if (isset($_POST['admin_signin'])) {
    $ad_username = $_POST['ad_username'];
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
    $connection->close();
}
?>


