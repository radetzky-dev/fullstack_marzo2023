<?php
require_once "../inc/functions.php";
require_once "../inc/header.php";

if (isset ($_SESSION["errorMessage"])) {
    ?>
    <div class="validation-message">
        <?php echo $_SESSION["errorMessage"]; ?>
    </div>
    <?php
    unset($_SESSION["errorMessage"]);
}
?>
<div>
    <form action="login-action.php" method="post" id="frmLogin">
        <h2>Enter Login Details</h2>
        <div class="row">
            <label class="text-left" for="username">Username <span id="user_info"
                    class="validation-message"></span></label>
            <input name="user_name" id="user_name" type="text" class="full-width" required>
        </div>
        <div class="row">
            <label class="text-left" for="password">Password <span id="password_info"
                    class="validation-message"></span></label> <input name="password" id="password" type="password"
                class="full-width" required>
        </div>
        <div class="row">
            <input type="submit" name="login" value="Login" class="full-width"></span>
        </div>
    </form>
</div>

<?php
require_once "../inc/footer.php";
?>