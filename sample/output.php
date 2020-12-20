<?php
include '../Session.php';
$test = new Session();
if ($test->userdata('email')) {
    echo 'emailあります<br>';
    echo $test->userdata('email');
}
