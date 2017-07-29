<?php

// Set the time zone of the system
date_default_timezone_set(config('app.timezone'));

// APP Version
defined('APP_VERSION') or define('APP_VERSION', "dev-master");
defined('APP_DATE') or define('APP_DATE', date('d-m-Y'));
