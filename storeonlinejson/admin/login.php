<?php
session_start();
require_once "../inc/functions.php";
require_once "../inc/header.php";

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
    <section class="w-100 p-4 d-flex justify-content-center pb-4">

        <form action="login-action.php" method="post" id="frmLogin" style="width: 30rem;">

            <div class="form-outline mb-4">
                <label class="form-control" for="username">Username <span id="user_info"
                        class="validation-message"></span></label>
                <input name="user_name" id="user_name" type="text" class="form-control" required>
            </div>
            <div class="form-outline mb-4">
                <label class="form-control" for="password">Password <span id="password_info"
                        class="validation-message"></span></label> <input name="password" id="password" type="password"
                    class="form-control" required>
            </div>
            <div class="form-outline mb-4">
                <input type="submit" name="login" value="Login" class="btn btn-primary btn-block mb-4""></span>
</div>
</form>
</section>
</div>

<?php
require_once "../inc/footer.php";
?>