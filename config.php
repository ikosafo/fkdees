<?php // config.php
define('URLROOT', 'http://fkdees.local/'); 

date_default_timezone_set('UTC');
$mysqli = new mysqli('localhost', 'root', '', 'fkdees');

if ($mysqli->connect_errno) {
    echo "cannot connect MYSQLI error no{$mysqli->connect_errno}:{$mysqli->connect_errno}";
    exit();
}