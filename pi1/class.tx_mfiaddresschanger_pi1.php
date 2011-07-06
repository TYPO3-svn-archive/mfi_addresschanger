<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2009 Jurij Acalinovic (jurijacalinovic@mac.com)
*  Very inspired by Simple Header Selector by Michael Wallner (Michael.Wallner@badSOFT.net)
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Plugin '' for the 'mfi_addresschanger' extension.
 *
 * @author	Jurij Acalinovic <jurijacalinovic@mac.com>
 * @based on Simple Header Selector by Michael Wallner (Michael.Wallner@badSOFT.net)
 */

/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 */

require_once(PATH_tslib.'class.tslib_pibase.php');

class tx_mfiaddresschanger_pi1 extends tslib_pibase {
	var $prefixId = 'tx_mfiaddresschanger_pi1';		// Same as class name
	var $scriptRelPath = 'pi1/class.tx_mfiaddresschanger_pi1.php';	// Path to this script relative to the extension dir.
	var $extKey = 'mfi_addresschanger';	// The extension key.
	var $pi_checkCHash = TRUE;

	/**
	 * Main function of plugin
	 *
	 * @param	void		$content: ...
	 * @param	void		$conf: ...
	 * @return	void		return html for address
	 */
	function main($content,$conf)	{
		// store config
		$this->conf = $conf;

		// store table information
		$this->type = $GLOBALS['TSFE']->page['tx_mfiaddresschanger_address'];
		switch($this->type){
			case 0:
				$this->company = $this->getParentsCompany();
				$this->address1 = $this->getParentsAddress1();
				$this->address2 = $this->getParentsAddress2();
				$this->phone = $this->getParentsPhone();
				break;
			case 1:
				return "";
			case 2:
				$this->company = $GLOBALS['TSFE']->page['tx_mfiaddresschanger_company'];
				$this->address1 = $GLOBALS['TSFE']->page['tx_mfiaddresschanger_address1'];
				$this->address2 = $GLOBALS['TSFE']->page['tx_mfiaddresschanger_address2'];
				$this->phone = $GLOBALS['TSFE']->page['tx_mfiaddresschanger_phone'];
		}

/*		$ret = $this->buildHtmlCode();*/

		$ret = '<span class="adress" style="text-align: left">'.$this->company.'</span>';
		$ret.= '<span class="adress" style="text-align: center">'.$this->address1.'</span>';
		$ret.= '<span class="adress" style="text-align: center">'.$this->address2.'</span>';
		$ret.= '<span class="adress" style="text-align: right">'.$this->phone.'</span>';
		$ret.= '<br style="clear: both;" />';

		return $ret;
	}

	/**
	 * [Put your description here]
	 *
	 * @return	[type]		...
	 */
	function buildHtmlCode(){
		$htmlCode = '<span class="adress">'.$this->company.'</span>';
		$htmlCode.= '<span class="adress">'.$this->address1.'</span>';
		$htmlCode.= '<span class="adress">'.$this->address2.'</span>';
		$htmlCode.= '<span class="adress">'.$this->phone.'</span>';
		return $htmlCode;
	}

	/**
	 * [Put your description here]
	 *
	 * @return	[type]		...
	 */
	function getParentsCompany() {

		foreach($GLOBALS['TSFE']->config['rootLine'] as $topPage) {
			// Recursive company found
			if ($topPage['tx_mfiaddresschanger_address'] == 2) {
				$company = $this->company . $topPage['tx_mfiaddresschanger_company'];
			}
		}
		// Return company
		return $company;
	}

	/**
	 * [Put your description here]
	 *
	 * @return	[type]		...
	 */
	function getParentsAddress1() {

		foreach($GLOBALS['TSFE']->config['rootLine'] as $topPage) {
			// Recursive address1 found
			if ($topPage['tx_mfiaddresschanger_address'] == 2) {
				$address1 = $this->address1 . $topPage['tx_mfiaddresschanger_address1'];
			}
		}
		// Return address1
		return $address1;
	}

	/**
	 * [Put your description here]
	 *
	 * @return	[type]		...
	 */
	function getParentsAddress2() {

		foreach($GLOBALS['TSFE']->config['rootLine'] as $topPage) {
			// Recursive address2 found
			if ($topPage['tx_mfiaddresschanger_address'] == 2) {
				$address2 = $this->address2 . $topPage['tx_mfiaddresschanger_address2'];
			}
		}
		// Return address2
		return $address2;
	}

	/**
	 * [Put your description here]
	 *
	 * @return	[type]		...
	 */
	function getParentsPhone() {

		foreach($GLOBALS['TSFE']->config['rootLine'] as $topPage) {
			// Recursive phone found
			if ($topPage['tx_mfiaddresschanger_address'] == 2) {
				$phone = $this->phone . $topPage['tx_mfiaddresschanger_phone'];
			}
		}
		// Return phone
		return $phone;
	}
}



if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mfi_addresschanger/pi1/class.tx_mfiaddresschanger_pi1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mfi_addresschanger/pi1/class.tx_mfiaddresschanger_pi1.php']);
}

?>