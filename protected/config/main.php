<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	//'preload'=>array('log','background'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.controller.*',
		'application.extensions.MongoYii.*',
		'application.extensions.MongoYii.validators.*',
		'application.extensions.MongoYii.behaviors.*',
		'application.extensions.MongoYii.util.*'
	),

	
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'qwerty',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		'yexcel' => array(
		    'class' => 'ext.yexcel.Yexcel'
		),

		'background' => array(
	        'class' => 'ext.backjob.EBackJob',

	        // All other configuration options are optional:

	        'checkAndCreateTable' => true,  // creates table if it doesn't exist
	        'useDb' => true,    // Use a database table
	        'useCache' => true, // Use the cache
	        'db' => 'db',    // Database component name to use
	        'ch' => 'cache', // Cache component name to use
	        'tableName' => 'e_background_job', // Name of DB table used
	        'cachePrefix' => 'EBackJobPrefix-',  // Prefix used in the cache
	        'errorTimeout' => 60, // Nr of seconds after which ALL requests time out, measured from the last update.
	        'userAgent' => 'Mozilla/5.0 Firefox/3.6.12' // Useragent used for the background request
	    ),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		//'db'=>array(
		//	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		//),
		// uncomment the following to use a MySQL database
		/*
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/

		'mongodb' => array(
			'class'		=> 'EMongoClient',
			'server'	=> 'mongodb://localhost:27017',
			'db'	=> 'databaseTA'
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		/*'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				
				array(
					'class'=>'CWebLogRoute',
				),
				
			),
		),*/
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);