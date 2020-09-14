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
require ROOT.'/core/classes/FileDB.php';
require ROOT.'/core/classes/Dog.php';
require ROOT.'/core/classes/Knife.php';
require ROOT.'/core/classes/Wife.php';
require ROOT.'/core/classes/Aspirine.php';
require ROOT.'/core/classes/Player.php';
require ROOT.'/core/classes/Potion.php';