<?php
// no direct access
defined('_JEXEC') or die;

// Include the mod_online functions only once.
require_once dirname(__FILE__).'/helper.php';

// Get layout data.
$info = avgLoadHelper::getExecInfo();

if ($info !== false) {
	// Render the module.
	require JModuleHelper::getLayoutPath('mod_avgload', 'default');
}

?>