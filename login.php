
<?php

$title = "Login - Blogging Website";

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
                    <h1>Members Login</h1>
                    <p>Hey, Enter your details to get sign in to your account.</p>

                    <form action="">
                    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
<a href="">Forgot Password?</a>   
<input type="submit" value="Login">    
</form>

<span>Don't have an account? <a href="">Signup</a> </span>
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