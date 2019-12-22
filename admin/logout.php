<?php

include('auth.php');
session_destroy();
header('Location:login.php?msg=logout');
die();
?>
