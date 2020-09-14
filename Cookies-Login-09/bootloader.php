<?php
session_start();
define('ROOT', __DIR__);
define('DB_FILE', ROOT.'/app/data/db.json');
require ROOT.'/core/functions/html.php';
require ROOT.'/core/functions/file.php';
require ROOT.'/core/functions/auth.php';
require ROOT.'/core/functions/form/core.php';
require ROOT.'/core/functions/form/validators.php';
require ROOT.'/app/functions/form/validators.php';