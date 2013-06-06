<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
	
	'api/4/devils/(:any)' => 'api/4/devils/detail/$1',
);