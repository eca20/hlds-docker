<?php
$dbtype = 'mysql';
$dbhost = getenv('PS_DB_HOST') ?: 'psychostats_db';
$dbport = getenv('PS_DB_PORT') ?: '3306';
$dbname = getenv('PS_DB_NAME') ?: 'psychostats3_1';
$dbuser = getenv('PS_DB_USER') ?: 'ps3';
$dbpass = getenv('PS_DB_PASSWORD') ?: 'ps3pass';
$dbtblprefix = 'ps_';
$site_url = '';
?>
