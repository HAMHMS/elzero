<?php

define('HOST', 'localhost');
define('USER','root');
define('PASSWORD', '');
define('DBNAME', "elzero1");

$conn = new mysqli(HOST , USER , PASSWORD , DBNAME);

$conn -> set_charset('utf8');

?> 
