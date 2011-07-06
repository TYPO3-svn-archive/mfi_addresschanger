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
 * Class/Function which manipulates the item-array for table/field pages_tx_mfiaddresschanger_address.
 *
 * @author	Jurij Acalinovic <jurijacalinovic@mac.com>
 * @based on Simple Header Selector by Michael Wallner (Michael.Wallner@badSOFT.net)
 */

/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 *
 *
 *   43: class tx_mfiaddresschanger_pages_tx_mfiaddresschanger_address
 *
 * TOTAL FUNCTIONS: 0
 * (This index is automatically created/updated by the extension "extdeveval")
 *
 */
	class tx_mfiaddresschanger_pages_tx_mfiaddresschanger_address {
		function main(&$params,&$pObj)	{
			// Adding an item!
			$params["items"][]=Array($pObj->sL("Added label by PHP function"), 998);

			// No return - the $params and $pObj variables are passed by reference, so just change content in then and it is passed back automatically...
		}
	}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mfi_addresschanger/class.tx_mfiaddresschanger_pages_tx_mfiaddresschanger_address.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mfi_addresschanger/class.tx_mfiaddresschanger_pages_tx_mfiaddresschanger_address.php']);
}

?>