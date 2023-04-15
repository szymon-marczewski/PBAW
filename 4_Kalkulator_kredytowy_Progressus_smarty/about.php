<?php
require_once dirname(__FILE__).'/config.php';
require_once _ROOT_PATH.'/assets/lib/smarty/Smarty.class.php';
$smarty = new Smarty();
$smarty->assign('root_path',_ROOT_PATH);

$smarty->display(_ROOT_PATH.'/about.tpl');