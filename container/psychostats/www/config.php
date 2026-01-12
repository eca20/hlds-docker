<?php
// PsychoStats web configuration (DB connection + site URL)
// Docker: use service DNS name, not localhost, to avoid socket connections.

$CONF = $CONF ?? [];

// DB settings
$CONF['dbtype'] = 'mysql';
$CONF['dbhost'] = 'psychostats_db';
$CONF['dbport'] = 3306;
$CONF['dbname'] = 'psychostats3_1';
$CONF['dbuser'] = 'ps3';
$CONF['dbpass'] = 'ps3pass';
$CONF['dbtblprefix'] = 'ps_';

// Site URL
$CONF['site_url'] = 'http://localhost:8088';