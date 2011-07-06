<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array (
	"tx_mfiaddresschanger_address" => Array (		
		"exclude" => 1,		
		"label" => "LLL:EXT:mfi_addresschanger/locallang_db.php:pages.tx_mfiaddresschanger_address",		
		"config" => Array (
			"type" => "select",
			"items" => Array (
				Array("LLL:EXT:mfi_addresschanger/locallang_db.php:pages.tx_mfiaddresschanger_address.I.0", "0"),
				Array("LLL:EXT:mfi_addresschanger/locallang_db.php:pages.tx_mfiaddresschanger_address.I.1", "1"),
				Array("LLL:EXT:mfi_addresschanger/locallang_db.php:pages.tx_mfiaddresschanger_address.I.2", "2"),
			),
			"size" => 1,	
			"maxitems" => 1,
		)
	),
	'tx_mfiaddresschanger_company' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:mfi_addresschanger/locallang_db.xml:pages.tx_mfiaddresschanger_company',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',
		)
	),
	'tx_mfiaddresschanger_address1' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:mfi_addresschanger/locallang_db.xml:pages.tx_mfiaddresschanger_address1',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',
		)
	),
	'tx_mfiaddresschanger_address2' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:mfi_addresschanger/locallang_db.xml:pages.tx_mfiaddresschanger_address2',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',
		)
	),
	'tx_mfiaddresschanger_phone' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:mfi_addresschanger/locallang_db.xml:pages.tx_mfiaddresschanger_phone',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',
		)
	),
);


t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('pages','tx_mfiaddresschanger_address;;;;1-1-1, tx_mfiaddresschanger_company, tx_mfiaddresschanger_address1, tx_mfiaddresschanger_address2, tx_mfiaddresschanger_phone');
?>