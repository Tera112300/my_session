<?php
include '../Session.php';
$test = new Session();
$destroy = array(
    "email"
);
$test->unset_userdata($destroy);
