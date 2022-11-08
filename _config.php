<?php
define('_FOLDER_','');																/* /_folder  */
define('_ROOT_', $_SERVER['DOCUMENT_ROOT']._FOLDER_);						// D:/Project/eticket
define("_HOME_", _FOLDER_.'/' );
define("_INC_", _ROOT_.'/inc' );													// D:/Project/eticket/inc
define("_TPL_", _ROOT_.'/templates' );											// D:/Project/eticket/templates
define("_HTTP_", (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "https").'://' );
define("_HOMEURL_", _HTTP_.$_SERVER['HTTP_HOST']._FOLDER_ );			// http://eticket.local
define("_BOURL_", _HOMEURL_ );													// http://eticket.local กรณีที่อยากซ้อน folder bo
define("_SERVICEURL_", _HOMEURL_.'/services' );								// http://eticket.local/services
define("_ASSET_", _HOMEURL_.'/assets' );										// http://eticket.local/assets
define("_IMG_", _ASSET_.'/images' );		
define("_PANO_", _ASSET_.'/pano' );		
