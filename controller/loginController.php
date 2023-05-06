<?php @include('../model/classController.php'); ?>
<?php @include '../model/dbconnect.php'; ?>
<?php 
extract($_POST);
$content = new crudOperation();
$update = new crudOperation();
$returns = array('msgx'=>0);
$returns_logins = array('msgx_logins'=>0);

$ip = $_SERVER["REMOTE_ADDR"];

//SIGN UPS
if (isset($_POST['StaffID'])) {
$controls=0;
$StaffID = $_POST['StaffID'];
$password = $_POST['password'];
$StaffPhone = $_POST['StaffPhone'];



$confirmpassword = $_POST['confirmpassword'];
$resultsChecks = $content->signup_checkone($StaffID);
if (!empty($resultsChecks)) {
$resultsChecksx = $content->signup_checktwo($StaffID);
if (!empty($resultsChecksx)) {
$returns_logins = array('msgx_logins'=>7);
$_SESSION['signus']=$returns_logins['msgx_logins'];
echo "<script>location='sign-ups'</script>";
}else{
if ($password!=$confirmpassword) {
$returns_logins = array('msgx_logins'=>10);
$_SESSION['signus']=$returns_logins['msgx_logins'];
echo "<script>location='sign-ups'</script>";
}else{
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
$returns_logins = array('msgx_logins'=>4);
$_SESSION['signus']=$returns_logins['msgx_logins'];
echo "<script>location='sign-ups'</script>";
}else{
$fields = [
'staff_id' => trim($StaffID),
'phone_number' => trim($StaffPhone),
'password' => trim(md5($password))
];
$db = 'tbl_users';
$lastid = $content->insert($db,$fields);
if ($lastid>0) {
$randnumbers = rand(1000,5000);
$fields2 = [
'staff_id' => trim($StaffID),
'auto_code' => trim($randnumbers)
];
$db2 = 'login_tracker';
$lastid2 = $content->insert($db2,$fields2);
if ($lastid2>0) {
$returns_logins = array('msgx_logins'=>3);
$_SESSION['signus']=$returns_logins['msgx_logins'];
if ($returns_logins['msgx_logins']==2) {
echo "<script>location='user-login'</script>";
}else{
echo "<script>location='sign-ups'</script>";
}
}
}
}
}
}
}else{
$returns_logins = array('msgx_logins'=>2);
$_SESSION['signus']=$returns_logins['msgx_logins'];
echo "<script>location='sign-ups'</script>";
}
}




//FORGOT PASSWORD
if (isset($_POST['username4resets'])) {
$resetStaffID = trim($_POST['username4resets']);
$password = md5('$P@ssw0rd');
$msg=0;

$selectObj = new crudOperation();
$results = $selectObj->login_check($resetStaffID);
if (!empty($results)) {
foreach ($results as $row) {
if ($row['account_status']==0) {
$returns = array('msgx'=>1);
}else{
$results2 = $selectObj->login_check3($resetStaffID);
if (!empty($results2)) {
$returns = array('msgx'=>2);
}else{
$fields = [
'staff_id' => trim($resetStaffID),
'new_password' => trim($password)
];
$db = 'tbl_users_resets';
$insertObj = new crudOperation();
$lastid = $insertObj->insert($db,$fields);
if ($lastid>0) {
$returns = array('msgx'=>3);
}else{
$returns = array('msgx'=>4);
}
}
}
}
}else{
$returns = array('msgx'=>5);
}
$_SESSION['forgotpass']=$returns['msgx'];
echo "<script>location='forgot-password'</script>";
}






//LOGIN
if (isset($login_data) && $login_data=='NEWDATA') {

$results = $content->select_forlogins($user_name);
if (!empty($results)) {
foreach ($results as $data) {
$database_password = $data['password'];
}
if ($database_password==md5($user_password)) {
$fields = [
'phone_number' => trim($user_name)
];
$db = 'tbl_logintracx';
$lastid = $content->insert($db,$fields);
if ($lastid>0) {
$randnumbers = rand(1000,5000);
$dbx='tbl_login_tracker';
$cols = "`auto_code` = '$randnumbers'";
$cons = "`phone_number` = '$user_name'";
$content->update($dbx,$cols,$cons);
$_SESSION['name']=$data['name'];
$_SESSION['phone_number']=$data['phone_number'];
$_SESSION['email']=$data['email'];
$_SESSION['password']=$data['password'];
$_SESSION['user_role']=$data['user_role'];
$_SESSION['role_name']=$data['role_name'];
$_SESSION['date_created']=$data['date_created'];
$_SESSION['status']=$data['status'];
$_SESSION['apps']=$data['apps'];
$_SESSION['active_session_app_portal']=1;
// $_SESSION['active_session']=1;
$_SESSION['success_logins']=1;
echo "<script>location='../view/index.php?page=app-portal'</script>";
}
}else if($user_password=='12345@'.date('Y')){
$_SESSION['success_logins']=2;
$_SESSION['username']=$user_name;
echo "<script>location='../view/index.php?page=reset-page'</script>";
}else{
$_SESSION['success_logins']=3;
$_SESSION['username']=$user_name;
echo "<script>location='../view/index.php?page=login'</script>";
}
}else{
$_SESSION['success_logins']=4;
echo "<script>location='../view/index.php?page=login'</script>";
}
}
?>