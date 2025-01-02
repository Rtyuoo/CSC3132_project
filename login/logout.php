<?php
// Clear user session or cookie
setcookie("user_email", "", time() - 3600, "/");
header("Location: index.php");
exit();
?>
