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
<div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6 items">
<div class="card contact-bx item-content">
<div class="card-body user-profile">
<div class="image-bx">
<img src="../images/pic1.jpg" data-src="images/contacts/Untitled-3.jpg" alt="" class="rounded-circle">
<span class="active"></span>
</div>
<div class="media-body user-meta-info">
<h6 class="fs-18 font-w600 my-1"><a href="app-profile.html" class="text-black user-name" data-name="Alan Green">Restaurant</a></h6>
<p class="fs-14 mb-3 user-work" data-occupation="UI Designer">Management of Restaurant</p>
<ul>
<li><a href="#"><i class="fas fa-phone-alt"></i></a></li>
<li><a href="#"><i class="far fa-comment-alt"></i></a></li>
<li><a href="#"><i class="fas fa-video"></i></a></li>
</ul>
</div>
</div>
</div>
</div>	
</div>
</div>
</div>
<?php @include('inc/footer_login.php');?>