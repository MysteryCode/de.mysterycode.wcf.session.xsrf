<?php

namespace wcf\system\event\listener;

use wcf\system\WCF;
use wcf\util\FileUtil;

class McSessionXsrfPrefixListener extends AbstractEventListener {
	/**
	 * @param    WCF      $eventObj
	 * @param    array    $parameters
	 */
	public function onInitialized(WCF $eventObj, array &$parameters) {
		if (!\file_exists(FileUtil::getRealPath(WCF_DIR) . 'sessionEmergency.txt')) {
			@include_once(WCF_DIR . '/lib/system/McSessionHandler.class.php');
		}
	}
}
