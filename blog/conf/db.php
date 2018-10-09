<?php

define("DSN", "mysql:host=localhost;dbname=blog");
define("USER", "root");
define("PASS", 'jecode4wcs');

// Connection
$pdo = new PDO(DSN, USER, PASS);
