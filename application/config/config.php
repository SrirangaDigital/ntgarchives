<?php

define('HOST_IP', 'http://192.168.1.21/');
define('BASE_URL', HOST_IP . 'ntgarchives/');
define('PUBLIC_URL', BASE_URL . 'public/');
define('XML_SRC_URL', BASE_URL . 'md-src/xml/');
define('PHOTO_URL', PUBLIC_URL . 'Photos/');
define('BROCHURE_URL', PUBLIC_URL . 'Brochures/');
define('DOWNLOAD_URL', PUBLIC_URL . 'Downloads/');
define('FLAT_URL', BASE_URL . 'application/views/flat/');
define('STOCK_IMAGE_URL', PUBLIC_URL . 'images/stock/');
define('RESOURCES_URL', PUBLIC_URL . 'Resources/');

// Physical location of resources
define('PHY_BASE_URL', '/var/www/html/ntgarchives/');
define('PHY_PUBLIC_URL', PHY_BASE_URL . 'public/');
define('PHY_XML_SRC_URL', PHY_BASE_URL . 'md-src/xml/');
define('PHY_PHOTO_URL', PHY_PUBLIC_URL . 'Photos/');
define('PHY_BROCHURE_URL', PHY_PUBLIC_URL . 'Brohures/');
define('PHY_TXT_URL', PHY_PUBLIC_URL . 'Text/');
define('PHY_DOWNLOAD_URL', PHY_PUBLIC_URL . 'Downloads/');
define('PHY_FLAT_URL', PHY_BASE_URL . 'application/views/flat/');
define('PHY_STOCK_IMAGE_URL', PHY_PUBLIC_URL . 'images/stock/');
define('PHY_RESOURCES_URL', PHY_PUBLIC_URL . 'Resources/');

define('DB_PREFIX', 'ntg');
define('DB_HOST', 'localhost');

// photo will become iitmPHOTO inside
define('DB_NAME', 'archives');

define('ntgARCHIVES_USER', 'root');
define('ntgARCHIVES_PASSWORD', 'mysql');

?>
