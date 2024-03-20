<?php
require_once "../inc/functions.php";
require_once "../inc/header.php";
session_start();
?>
<div>
    <h3>Admin login</h3>
    <?php
    if (isset ($_SESSION["errorMessage"])) {
        ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION["errorMessage"]; ?>
        </div>
        <?php
        unset($_SESSION["errorMessage"]);
    }
    ?>
    <form action="login-action.php" method="post" id="frmLogin">

        <div class="form-outline mb-4">
            <label class="text-left" for="username">Username <span id="user_info"
                    class="validation-message"></span></label>
            <input name="user_name" id="user_name" type="text" class="full-width" required>
        </div>
        <div class="form-outline mb-4">
            <label class="text-left" for="password">Password <span id="password_info"
                    class="validation-message"></span></label> <input name="password" id="password" type="password"
                class="full-width" required>
        </div>
        <div class="form-outline mb-4">
            <input type="submit" name="login" value="Login" class="btn btn-primary btn-block mb-4""></span>
        </div>
    </form>
</div>

<?php
require_once "../inc/footer.php";
?>