<?php @session_start(); ?>
<?php 
if (!isset($_SESSION['active_session'])) {
@include('inc/header_login.php');
}else{
@include('inc/header.php');
@include('inc/menu.php');
@include('../model/classController.php'); 
}
?>



<?php 
// if (!isset($_SESSION['active_session'])) {
// echo "<script>location='../'</script>";
// exit();
// }

if (isset($_SESSION['active_session'])) {
$selectCompanyDetails = $content->comp_details();
if (!empty($selectCompanyDetails)) {
foreach ($selectCompanyDetails as $xrowz) {
$name = $xrowz['pharmacy_name'];
$phone = $xrowz['phone_number'];
$image = $xrowz['image'] ?? 'dammy.png';
}
}else{
$name = 'Dammy Company Name';
$phone = '0244-000000';
$image = 'dammy.png';	
}
}else{}





?>
<main>
<?php $page = isset($_GET['page']) ? $_GET['page'] :'dashboard'; ?>
<?php include $page.'.php'; ?>
</main>