<?php

$title = "Signup - Blogging Website";

include_once('./common/header.php');

?>

<!-- Navigation Bar -->
<?php
include_once('./common/navbar.php');
?>
<!-- Main Content -->

<div class="container">
    <div class="row login-main">

        <div class="col-md-6 col-lg-5 col-12">
            <div class="card shadow p-4 login-card">
                <div class="login-card-body">
                    <h1>Members Registration</h1>
                    <p>Hey, Enter your details to create your new account.</p>

                    <form action="" autocomplete="off">
                    <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-person-fill"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Full Name" >
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-envelope-fill"></i>
                            </span>
                            <input type="email" class="form-control" placeholder="Email Address" >
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-telephone-fill"></i>
                            </span>
                            <input type="tel" class="form-control" placeholder="Mobile Number" >
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                            <input type="password" class="form-control" placeholder="Password" id="user_password" >
                            <button class="btn" type="button" onclick="togglePassword('login-password-icon', 'user_password' )" id="button-addon2">
                                <i class="bi bi-eye-fill" id="login-password-icon"></i>
                            </button>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                            <input type="password" class="form-control" placeholder="Confirm Password" id="user_confirm_password" >
                            <button class="btn" type="button" onclick="togglePassword('login-confirm-password-icon', 'user_confirm_password' )" id="button-addon2">
                                <i class="bi bi-eye-fill" id="login-confirm-password-icon"></i>
                            </button>
                        </div>
                        <input type="submit" value="Signup" class="login-btn btn btn-primary d-block mx-auto mt-4">
                    </form>

                    <span class="page-change">Already have an account? <a href="login.php"> Login!</a> </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php
include_once('./common/footer.php');
?>
<!-- Javascript -->
<?php
include_once('./common/misc.php');
?>
<!-- Custom Javascript -->
</body>

</html>