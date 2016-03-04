<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Liganachrichten' => 'system/modules/schachbundesliga/classes/Liganachrichten.php',
	'Ligatabelle'     => 'system/modules/schachbundesliga/classes/Ligatabelle.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_schachbundesliga' => 'system/modules/schachbundesliga/templates',
	'sbl_nachrichten'     => 'system/modules/schachbundesliga/templates',
	'sbl_tabelle'         => 'system/modules/schachbundesliga/templates',
));
