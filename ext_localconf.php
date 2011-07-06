<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

t3lib_extMgm::addPItoST43($_EXTKEY,'pi1/class.tx_mfiaddresschanger_pi1.php','_pi1','',1);
// Get extension configuration
$tx_mfiaddresschanger_extConf = unserialize($_EXTCONF);

// Add constants
t3lib_extMgm::addTypoScriptConstants('extension.mfi_addresschanger.typeNum = ' . $flash_pageheader_extConf['typeNum']);

$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= ',tx_mfiaddresschanger_address,tx_mfiaddresschanger_company,tx_mfiaddresschanger_address1,tx_mfiaddresschanger_address2,tx_mfiaddresschanger_phone';
?>