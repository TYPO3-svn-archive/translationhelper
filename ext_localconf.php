<?php
if (!defined ('TYPO3_MODE'))    die ('Access denied.');

$extConf = unserialize($_EXTCONF);

if((boolean) $extConf['showLabelKeys'] == TRUE) {
	$GLOBALS['TYPO3_CONF_VARS']['BE']['lang']['debug'] = 1;
}

if((boolean) $extConf['enableXCLASS'] == TRUE) {
	$GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/lang/lang.php'] = t3lib_extMgm::extPath($_EXTKEY) . 'class.ux_lang.php';
}


?>
