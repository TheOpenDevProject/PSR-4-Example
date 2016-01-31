<?php
//The only include you will ever need
include 'vendor/autoload.php';
use MyApp\Core\FooBar;
$example = new FooBar();
$example->input("blaa")->output();
?>
