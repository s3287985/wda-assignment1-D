<?php
define("USER_HOME_DIR", "/home/stud/s3287985"); // CHANGE HERE
require(USER_HOME_DIR . "/.HTMLinfo/winestoreD/Smarty-3.1.11/libs/Smarty.class.php");
$smarty = new Smarty();
define("WEB_ROOT", 'http://yallara.cs.rmit.edu.au/~s3287985/winestoreD');
$smarty->assign('WEB_ROOT',WEB_ROOT);
$smarty->template_dir = USER_HOME_DIR . "/.HTMLinfo/winestoreD/templates";
$smarty->compile_dir = USER_HOME_DIR . "/.HTMLinfo/winestoreD/templates_c";
$smarty->cache_dir = USER_HOME_DIR . "/.HTMLinfo/winestoreD/cache";
$smarty->config_dir = USER_HOME_DIR . "/.HTMLinfo/winestoreD/configs";
?>