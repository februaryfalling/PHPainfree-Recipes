<?php

/************************** PHPainfree **************************
Name: PainfreeConfig-Simple.php

Author: Eric Ryan Harrison 
	me@ericharrison.info
	http://ericharrison.info
	
Usage:
	This is a simple PHPainfree Configuration file.
This configuration file corresponds to the "Simple" 
PHPainfree Recipe. This can be used as a starting point
for your PHPainfree applications.

	cp PainfreeConfig-Simple.php PainfreeConfig.php
	vi PainfreeConfig.php
****************************************************************/

/*************************** Edit Me ***************************/
// WARNING: $Painfree looks for a variable called $PainfreeConfig
// provided by a file called PainfreeConfig.php. It must exist.
// Don't go off changing names willy-nilly or you will probably
// regret it.
$PainfreeConfig = array(

	// ApplicationController is the primary controller for your
	// application. Generic.php is provided, but doesn't do anything
	// except look for the view in the templates/ folder
	'ApplicationController' => 'Simple.php', 
	
	// BaseView is the name of your base template inside of the templates
	// folder. This base view generally provides the overall framework
	// of output for your application
	'BaseView' => 'simple_base.tpl',
	
	// DefaultView is the default view
	'DefaultView' => 'home',
	
	// DB Configuration
	// each element in the array is a DB server to try. If one
	// fails to connect, it will roll-over to the next
	// leave the array empty for no DB connection
	'Database' => array(),

	/*
	// This is an example Database configuration with two DB connections
	// defined.
	// In this example, DBI.php will try to load PrimaryDB first,
	// and if that fails, will then try BackupDB. Both failures
	// would obviously result in application load failure, so
	// just be aware of that possibility.
	'Database' => array(
		'PrimaryDB' => array(
			'host'   => 'hostname.or.ip.of.server.1.com',
			'user'   => 'username',
			'pass'   => 'password',
			'schema' => 'default_schema',
			'port'   => 3306,
		),
		'BackupDB' => array(
			'host'   => 'hostname.or.ip.of.server.2.com',
			'user'   => 'username',
			'pass'   => 'password',
			'schema' => 'default_schema',
			'port'   => 3306,
		),
	),
	*/
	
	// hardcore configuration. only change this if you know what you're doing
	'PathParameter'  => 'path',
	'TemplateFolder' => 'templates',
	'LogicFolder'    => 'includes',
	
);
