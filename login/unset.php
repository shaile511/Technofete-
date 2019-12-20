<?php
session_start();
//echo "the user name is :".$_SESSION["user_name"];
session_unset($_SESSION['log']);
session_unset($_SESSION['msg']);
session_unset($_SESSION['roll']);
session_unset($_SESSION['name']);
session_unset();
session_destroy();
?>