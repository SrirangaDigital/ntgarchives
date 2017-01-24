<?php

define('DEFAULT_JOURNAL', 'sadh');
define('DEFAULT_VOLUME', '025');
define('DEFAULT_ISSUE', '01');
define('DEFAULT_PAGE', '0001-0010');

define('DEFAULT_ALBUM', '001');
define('PHOTO_FILE_EXT', '.JPG');

define('DEFAULT_TYPE', '01');
define('LETTERS', '01');
define('ARTICLES', '02');

// db table names
define('METADATA_TABLE_L1', 'album');
define('METADATA_TABLE_L2', 'archive');
define('METADATA_TABLE_L3', 'userdetails');
define('METADATA_TABLE_L4', 'reset');

// search settings
define('SEARCH_OPERAND', 'AND');

// user settings (login and registration)
define('SALT', 'raza');
define('REQUIRE_EMAIL_VALIDATION', False);//Set these values to True only
define('REQUIRE_RESET_PASSWORD', False);//if outbound mails can be sent from the server

// mailer settings
// define('SERVICE_EMAIL', 'webadmin@iitm.ac.in');
// define('SERVICE_NAME', 'Indian Institute of Technology Madras');
define('SERVICE_EMAIL', 'shiva@srirangadigital.com');
define('SERVICE_NAME', 'Shivashankar');


?>
