<?php
if (!defined("ROOT")) {
    define("ROOT", "D:/xampp/htdocs/forum_");
}
session_start();
define("ROOT", dirname(__FILE__));
set_include_path(get_include_path().PATH_SEPARATOR.ROOT.PATH_SEPARATOR.ROOT."/lib".PATH_SEPARATOR.ROOT."/core".PATH_SEPARATOR.ROOT."/image".PATH_SEPARATOR.ROOT."/conf");
require_once 'mysql.func.php';
//require_once 'image.func.php';
require_once 'common.php';
require_once 'string.func.php';
require_once 'page.func.php';
require_once 'configs.php';
require_once 'admin.inc.php';