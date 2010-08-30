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
require LIBS_DIR . '/Validators/MyValidators.php';
require LIBS_DIR . '/phpMyDataGrid/phpmydatagrid.class.php';

if(!function_exists('sha256')){
	require LIBS_DIR . '/sha256/sha256.php';
}


// Step 2: Configure environment
// 2a) enable Nette\Debug for better exception and error visualisation
Debug::enable(NULL,NULL,'jirimuller@email.cz');
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

$router[] = new Route('<id [1-4]>-<typ>', array(
	'presenter' => 'Detail',
	'action' => 'default',
    'typ' => NULL,
	'id' => NULL,
));

$router[] = new Route('<id [1-4]>-<typ game|office|pro|home>/<action>/<do>', array(
	'presenter' => 'Objednavka',
	'do' => NULL,
));

$router[] = new Route('objednavka/<id [1-4]>-<typ game|office|pro|home>/<action>/<do>', array(
	'presenter' => 'Objednavka',
	'do' => NULL,
));
$router[] = new Route('texty/<ident>', array(
	'presenter' => 'Texty',
	'action' => 'default',
));

$router[] = new Route('registrace/<action>/', array(
	'presenter' => 'Registrace',
	'action' => 'default',
));

$router[] = new Route('registrace/<action validate|newpass>/<id>/<hash>/[<do>]', array(
	'presenter' => 'Registrace',
	'action' => 'validate',
));
//addkomp-submit/
$router[] = new Route('manager/addkomponent/[<do>]', array(
	'presenter' => 'Manager',
	'action' => 'addkomponent',
	'id' => NULL,
));

$router[] = new Route('manager/<action>/[<id>]/[s=<sestava>][<do>]', array(
	'presenter' => 'Manager',
	'action' => 'sestavy',
	'id' => NULL,
));

$router[] = new Route('<presenter>/<action>/[<do>]', array(
	'presenter' => 'Sestavy',
	'action' => 'default',
	'id' => NULL,
));







// Step 5: Run the application!
$application->run();
