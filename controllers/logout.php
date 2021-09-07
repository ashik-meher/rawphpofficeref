<?php session_start();
error_reporting(0);
require_once('../layouts/header.php');

echo '<div class="middle">Sad to see you leave  '. 'MR. '. $_SESSION['user_name']. '<br>';
echo 'Please Come Again!<br>';
echo '<a href="../index.php">Login</a></div>';

session_unset();

session_destroy();

require_once('../layouts/footer.php');

?>
