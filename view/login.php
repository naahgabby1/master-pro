<?php 
if (isset($_SESSION['success_logins'])) {
if ($_SESSION['success_logins']==3) {
$message=1;
}else if ($_SESSION['success_logins']==4) {
$message=2;
}
unset($_SESSION['success_logins']);
}
?>
<div class="authincation h-100">
<div class="container h-100" style="margin-top: 100px;">  
<div class="row justify-content-center h-100 align-items-center">
<div class="col-md-6">
<div class="authincation-content">
<div class="row no-gutters">
<div class="col-xl-12">
<div class="auth-form">
<div class="text-center mb-3">
<a href="#"><img src="../images/logo-full.png" alt=""></a>
</div>
<h4 class="text-center mb-4">Sign into your account</h4>
<form action="../controller/loginController.php" method="POST">
<div class="mb-3">
<input type="hidden" autocomplete="none" name="login_data" value="NEWDATA">
<label class="mb-1"><strong>Username</strong></label>
<input type="text" class="form-control" name="user_name" id="user_name" placeholder="User Name" />
</div>
<div class="mb-3">
<label class="mb-1"><strong>Password</strong></label>
<input type="password" class="form-control" name="user_password" id="user_password" placeholder="User Password">
</div>
<div class="row d-flex justify-content-between mt-4 mb-2">
<div class="mb-3">
<div class="form-check custom-checkbox ms-1">
<input type="checkbox" class="form-check-input" id="basic_checkbox_1" checked disabled>
<label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
</div>
</div>
<div class="mb-3">
<a href="#">Forgot Password?</a>
</div>
</div>
<div class="text-center">
<button type="submit" class="btn btn-primary btn-block">Sign In</button>
</div>
</form>
<div class="new-account mt-3">
<p>Don't have an account? <a class="text-primary" href="#">Sign up</a></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php @include('inc/footer_login.php');?>