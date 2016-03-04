<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2016 Leo Feyer
 *
 * @package   Schachbundesliga
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2016
 */

/**
 * Add palette to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['schachbundesliga_tabelle'] = '{title_legend},name,type;{sbl_legend},sbl_newWindow;{expert_legend:hide},cssID,align,space';
$GLOBALS['TL_DCA']['tl_module']['palettes']['schachbundesliga_news'] = '{title_legend},name,type;{sbl_legend},sbl_design,sbl_beitraege,sbl_headcolor,sbl_backcolor,sbl_newWindow;{expert_legend:hide},cssID,align,space';

$GLOBALS['TL_DCA']['tl_module']['fields']['sbl_design'] = array
(
	'label'            => &$GLOBALS['TL_LANG']['tl_module']['sbl_design'],
	'exclude'          => true,
	'default'          => 'schmal',
	'inputType'        => 'select',
	'options'          => array
	(
		'schmal'       => 'Nur Headlines',
		'breit'        => 'Headlines und Intro'
	),
	'eval'             => array('tl_class'=>'w50'),
	'sql'              => "char(6) NOT NULL default 'schmal'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['sbl_beitraege'] = array
(
	'label'            => &$GLOBALS['TL_LANG']['tl_module']['sbl_beitraege'],
	'exclude'          => true,
	'default'          => 1,
	'inputType'        => 'select',
	'options'          => array(1, 2, 3, 4, 5),
	'eval'             => array('tl_class'=>'w50'),
	'sql'              => "char(1) NOT NULL default '1'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['sbl_headcolor'] = array
(
	'label'            => &$GLOBALS['TL_LANG']['tl_module']['sbl_headcolor'],
	'inputType'        => 'text',
	'default'          => 'ebebeb',
	'eval'             => array
	(
		'maxlength'    => 6, 
		'multiple'     => false, 
		'size'         => 1, 
		'colorpicker'  => true, 
		'isHexColor'   => true, 
		'tl_class'     => 'w50 wizard'
	),
	'decodeEntities'   => true, 
	'sql'              => "varchar(6) NOT NULL default 'ebebeb'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['sbl_backcolor'] = array
(
	'label'            => &$GLOBALS['TL_LANG']['tl_module']['sbl_backcolor'],
	'inputType'        => 'text',
	'default'          => 'f9f9f9',
	'eval'             => array
	(
		'maxlength'    => 6, 
		'multiple'     => false, 
		'size'         => 1, 
		'colorpicker'  => true, 
		'isHexColor'   => true, 
		'tl_class'     => 'w50 wizard'
	),
	'decodeEntities'   => true, 
	'sql'              => "varchar(6) NOT NULL default 'f9f9f9'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['sbl_newWindow'] = array
(
	'label'            => &$GLOBALS['TL_LANG']['tl_module']['sbl_newWindow'],
	'exclude'          => true,
	'inputType'        => 'checkbox',
	'eval'             => array('tl_class'=>'w50'),
	'sql'              => "char(1) NOT NULL default ''" 
);
		