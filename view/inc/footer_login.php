<script src="../vendor/global/global.min.js"></script>
<script src="../vendor/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="../js/plugins-init/sweetalert.init.js"></script>
<script src="../js/custom.min.js"></script>
<script src="../js/dlabnav-init.js"></script>
<!-- <script src="../js/styleSwitcher.js"></script> -->
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
var	message=<?php echo json_encode($message); ?>;
if (message==1) {
sweetAlert("Oops...", "Couldn't Login", "error")	
}else if (message==2) {
sweetAlert("Oops...", "User Doesn't Exist", "error")	
}
});
</script>