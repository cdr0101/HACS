<?php

@include 'HACS\config.php';

session_start();
session_unset();
session_destroy();

header('location:HACS\login_form.php');

?>