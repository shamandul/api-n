<?php
date_default_timezone_set('Europe/Madrid');
error_reporting(E_ALL);
ini_set('ignore_repeated_errors', true);
ini_set('display_errors', true);
ini_set('log_errors', true);
ini_set('error_log', 'debug.log');

require_once 'vendor/autoload.php';
require_once 'app/configs/config.php';

require_once 'app/routers/router.php';
