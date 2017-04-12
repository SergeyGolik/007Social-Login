<?php
//    777

$_REQUEST['hauth_done'] = 'Live';

require_once( "system/library/Hybrid/Auth.php" );
require_once( "system/library/Hybrid/Endpoint.php" );
Hybrid_Endpoint::process();