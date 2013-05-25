<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'theme'=>'pekayon',
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'POS Loket Pelangi',

	// preloading 'log' component
	'preload'=>array('bootstrap','log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'amanah',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		    'generatorPaths' => array(
						'bootstrap.gii'
			),
		),
			
		'rbam'=>array(
				  'applicationLayout'=>'application.views.layouts.main',
				  'authAssignmentsManagerRole'=>' Auth Assignments Manager',
				  'authenticatedRole'=>'Authenticated',
				  'authItemsManagerRole'=>'Auth Items Manager',
				  'baseScriptUrl'=>null,
				  'baseUrl'=>null,
				  'cssFile'=>null,
				  'development'=>true,
				  'exclude'=>'rbam',
				  'guestRole'=>'Guest',
				  'initialise'=>null,
				  'layout'=>'rbam.views.layouts.main',
				  'juiCssFile'=>'jquery-ui.css',
				  'juiHide'=>'puff',
				  'juiScriptFile'=>'jquery-ui.min.js',
				  'juiScriptUrl'=>null,
				  'juiShow'=>'fade',
				  'juiTheme'=>'base',
				  'juiThemeUrl'=>null,
				  'pageSize'=>10,
				  'rbacManagerRole'=>'RBAC Manager',
				  'relationshipsPageSize'=>5,
				  'showConfirmation'=>3000,
				  'showMenu'=>true,
				  'userClass'=>'Users',
				  'userCriteria'=>array(),
				  'userIdAttribute'=>'id',
                  'userNameAttribute'=>'username',
				),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>false
		),
		'bootstrap' => array(
			'class' => 'ext.bootstrap.components.Bootstrap',
			'responsiveCss' => true,
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
		/**'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),**/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'pgsql:host=localhost;dbname=loketpelangi',
			'emulatePrepare' => true,
			'username' => 'loketpelangi',
			'password' => 'ihsantaqwa',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	   'authManager'=>array(
	       'class'=>'CDbAuthManager',
	       'connectionID'=>'db',		
	       'itemTable'=>'auth_item',
	       'itemChildTable'=>'auth_item_child',
	       'assignmentTable'=>'auth_assignment',
		 )
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'info@negeripelangi.org',
	),
);