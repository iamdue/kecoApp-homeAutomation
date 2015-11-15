<?php

include(dirname(__FILE__).'/config/constants.php');
include(ROOT.'/config/config.php');
include('autoload.php');

/**
 * API
 */

use Modules\Api as Api;




print_r(new Api());

?>