<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

?>
<script type="text/javascript">
	window.location="https://proscholarship.co.in/login.php";
</script>

</body>
</html>