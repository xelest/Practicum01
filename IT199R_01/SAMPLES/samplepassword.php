<?php
include_once('phpcore/core_functions.php');

$mypass = md5('mypassword');
echo $mypass;
$pword = passAjinomoto($mypass);
echo $pword;

 ?>
