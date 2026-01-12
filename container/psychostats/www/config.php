<?php
// PsychoStats web configuration (DB connection + site URL)
// Intentionally forces TCP connections inside Docker (no localhost / no socket)

$dbtype = 'mysql';
$dbhost = 'psychostats_db';   // Docker service name, NOT localhost
$dbport = '3306';             // Force TCP, avoids mysqld.sock
$dbname = 'psychostats3_1';
$dbuser = 'ps3';
$dbpass = 'ps3pass';

// Table prefix used during install
$dbtblprefix = 'ps_';

// Base URL used by PsychoStats
$site_url = 'http://localhost:8088';
?>
