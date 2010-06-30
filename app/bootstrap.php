<?php

/**
 * My Application bootstrap file.
 *
 * @copyright  Copyright (c) 2010 John Doe
 * @package    MyApplication
 */



// Step 1: Load Nette Framework
// this allows load Nette Framework classes automatically so that
// you don't have to litter your code with 'require' statements
require LIBS_DIR . '/Nette/loader.php';
require LIBS_DIR . '/dibi/dibi.php';

if(!function_exists('sha256')){
	require LIBS_DIR . '/sha256/sha256.php';
}


// Step 2: Configure environment
// 2a) enable Nette\Debug for better exception and error visualisation
Debug::enable();
Debug::$strictMode = TRUE;
Debug::enableProfiler();
Debug::$counters['Last SQL query'] = & dibi::$sql;
// 2b) load configuration from config.ini file
Environment::loadConfig();

dibi::connect(Environment::getConfig('database'));

// Step 3: Configure application
// 3a) get and setup a front controller
$application = Environment::getApplication();
$application->errorPresenter = 'Error';
//$application->catchExceptions = TRUE;



// Step 4: Setup application router
$router = $application->getRouter();

$router[] = new Route('index.php', array(
	'presenter' => 'Sestavy',
	'action' => 'default',
), Route::ONE_WAY);

$router[] = new Route('', array(
        'presenter' => 'Sestavy',
        'action' => 'default',
		'typ' => 'game',
));

$router[] = new Route('sestavy/<typ game|office|pro|home>', array(
	'presenter' => 'Sestavy',
	'action' => 'default',
    'typ' => 'game',
));

$router[] = new Route('detail/<typ>/<id [1-4]>', array(
	'presenter' => 'Detail',
	'action' => 'default',
    'typ' => NULL,
	'id' => NULL,
));

$router[] = new Route('objednavka/<typ>/<id>/<action>', array(
	'presenter' => 'Objednavka',
	'action' => 'konfigurace',
	'typ' => 'game',
	'id' => 1,
));

$router[] = new Route('<presenter>/<action>/<id>', array(
	'presenter' => 'Sestavy',
	'action' => 'default',
	'id' => NULL,
));





// Step 5: Run the application!
$application->run();
