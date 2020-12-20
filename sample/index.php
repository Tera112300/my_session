<?php
include '../Session.php';
$test = new Session();
$data = array(
    "id" => 1,
    "email" => "test@email.co.jp"
);
$test->set_userdata($data);
