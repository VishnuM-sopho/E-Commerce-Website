
<?php  require("../controllers/config.php");
require("../views/header.php"); ?>
<form action="../models/password.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="old_password" placeholder="Old Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="new_password" placeholder="New Password" type="password"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="confirm_password" placeholder="Confirm New Password" type="password"/>
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                Change Password
            </button>
        </div>
    </fieldset>
</form>
