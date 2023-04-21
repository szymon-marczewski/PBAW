<?php
require_once dirname(__FILE__).'/../config.php';
require_once $conf->root_path.'/assets/lib/smarty/Smarty.class.php';
$smarty = new Smarty();
$smarty->assign('conf', $conf);
$smarty->display($conf->root_path.'/app/about.tpl');