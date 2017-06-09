<?php
include('header.php');
require("connect-dbse.php");
?>
    <div data-role="page" id="signup" data-theme="b">
        <div data-role="header">
            <div data-role="navbar">
                <ul>
                    <li><a href="#" data-rel="back" class="ui-icon-arrow-l ui-btn-icon-left">Go Back</a></li>
                </ul>
            </div>
            <h1>QuakEarth Sign up</h1>
        </div>
        <div data-role="main" class="ui-content">
            <h3>Already Registered? Click here to <a href="user_sign_in.php">Sign In</a></h3>
            <form action="user_sign_up.php" method="post">
                <label for="Name">Name</label>
                <input type="text" name="Name" id="Name">

                <label for="username">User Name</label>
                <input type="text" name="username" id="username">

                <label for="email">Email</label>
                <input type="email" name="email" id="email">

                <label for="password">Password</label>
                <input type="password" name="password" id="password">

                <label for="confirm_password">Confirm your Password</label>
                <input type="password" name="confirm_password" id="confirm_password">

                <button class="ui-btn" name="register">Register</button>
            </form>
        </div>
    </div>


    <!-- php code registration-->

<?php
if (isset($_POST['register'])) {
    $fname = $_POST['Name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conf_password = $_POST['confirm_password'];

    $query_register = "INSERT INTO user(user_id, user_Name, user_email, user_Uname, user_password) VALUES (DEFAULT, ?,?,?,?)";
    $stmt = $connection->prepare($query_register);
    $stmt->bind_param("ssss", $fname, $email, $username, $password);
    $result_reg = $stmt->execute();
    $stmt->close();
    if ($result_reg) {
        header('location:user_reg_success.php');
        echo "registration successful";
    }

}


?>


<?php
include('footer.php');
?>