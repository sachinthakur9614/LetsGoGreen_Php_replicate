
<?php
//  session_destroy();



session_destroy();

header("Location: index.php");
exit;

// session_unset();
// session_destroy();
// session_write_close();
// setcookie(session_name(),'',0,'/');
// header('Location: index.php');
?>