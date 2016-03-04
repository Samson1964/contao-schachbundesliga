<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @package   Schachbundesliga
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2016
 */

class Liganachrichten extends \Module
{

	protected $strTemplate = 'sbl_nachrichten';
	
	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new \BackendTemplate('be_schachbundesliga');

			$objTemplate->wildcard = '### SCHACHBUNDESLIGA Nachrichten ###';
			$objTemplate->title = $this->name;
			$objTemplate->id = $this->id;

			return $objTemplate->parse();
		}
		
		return parent::generate(); // Weitermachen mit dem Modul
	}

	/**
	 * Generate the module
	 */
	protected function compile()
	{
		// Template-Objekt anlegen
		$this->Template = new \FrontendTemplate($this->strTemplate);
		$this->Template->class = 'mod_sblnews';
		$this->Template->design = $this->sbl_design;
		$this->Template->beitraege = $this->sbl_beitraege;
		$this->Template->headlinecolor = $this->sbl_headcolor;
		$this->Template->backgroundcolor = $this->sbl_backcolor;
		$this->Template->blank = $this->sbl_newWindow;

	}

}
