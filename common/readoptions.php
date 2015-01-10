<?php
/**
* Class and Function List:
* Function list:
* - SDIDTM_reload_options()
* - sdidtm_debug_file()
* Classes list:
*/
define('SDIDTM_OPTIONS', 'sdidtm-options');
define('SDIDTM_OPTION_DTM_CODE', 'dtm-code');
define('SDIDTM_OPTION_DATALAYER_NAME', 'dtm-datalayer-variable-name');

define('SDIDTM_OPTION_INCLUDE_LOGGEDIN', 'include-loggedin');
define('SDIDTM_OPTION_INCLUDE_USERROLE', 'include-userrole');
define('SDIDTM_OPTION_INCLUDE_POSTTYPE', 'include-posttype');
define('SDIDTM_OPTION_INCLUDE_CATEGORIES', 'include-categories');
define('SDIDTM_OPTION_INCLUDE_TAGS', 'include-tags');
define('SDIDTM_OPTION_INCLUDE_AUTHOR', 'include-author');
define('SDIDTM_OPTION_INCLUDE_POSTDATE', 'include-postdate');
define('SDIDTM_OPTION_INCLUDE_POSTTITLE', 'include-posttitle');
define('SDIDTM_OPTION_INCLUDE_POSTCOUNT', 'include-postcount');
define('SDIDTM_OPTION_INCLUDE_SEARCHDATA', 'include-searchdata');

$SDIDTM_options = array();

$SDIDTM_defaultoptions = array(SDIDTM_OPTION_DTM_CODE => "", SDIDTM_OPTION_DATALAYER_NAME => "", SDIDTM_OPTION_INCLUDE_LOGGEDIN => false, SDIDTM_OPTION_INCLUDE_USERROLE => false, SDIDTM_OPTION_INCLUDE_POSTTYPE => true, SDIDTM_OPTION_INCLUDE_CATEGORIES => true, SDIDTM_OPTION_INCLUDE_TAGS => true, SDIDTM_OPTION_INCLUDE_AUTHOR => true, SDIDTM_OPTION_INCLUDE_POSTDATE => false, SDIDTM_OPTION_INCLUDE_POSTTITLE => false, SDIDTM_OPTION_INCLUDE_POSTCOUNT => false, SDIDTM_OPTION_INCLUDE_SEARCHDATA => false);

function SDIDTM_reload_options() {
  global $SDIDTM_defaultoptions;
  
  $storedoptions = (array)get_option(SDIDTM_OPTIONS);
  if (!is_array($SDIDTM_defaultoptions)) {
    $SDIDTM_defaultoptions = array();
  }
  
  return array_merge($SDIDTM_defaultoptions, $storedoptions);
}

function sdidtm_debug_file($debug_data) {
  $fp = fopen(dirname(__FILE__) . "/" . date("Y-m-d-H-i-s-u") . ".txt", "w");
  if ($fp) {
    fwrite($fp, $debug_data);
    fclose($fp);
  }
}

$SDIDTM_options = SDIDTM_reload_options();
