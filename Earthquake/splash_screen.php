<?php
include('header.php');
?>
<!-- splash screen -->
<div data-role="page" id="splash">
    <div class="splash" style="align-content: center">
        <img src="img/quake11.gif" alt="startup image" />
    </div>
</div>

<!--choose role admin or user-->
<div data-role="page" id="choose_role" data-theme="b">
    <div data-role="header">
        <h3>QuakEarth</h3>
    </div>
    <div data-role="main" class="ui-content">
        <a href="user_sign_up.php" class="ui-btn ui-btn-corner-all">USER</a>
        <a href="admin_signin.php" class="ui-btn ui-btn-corner-all">ADMIN</a>
    </div>
</div>



<script type="text/javascript">
    $(document).on('pageinit','#splash',function(){ // the .on() method does require jQuery 1.7 + but this will allow you to have the contained code only run when the #splash page is initialized.
        setTimeout(function(){
            $.mobile.changePage("#choose_role", "fade");
        }, 4000);
    });
</script>





