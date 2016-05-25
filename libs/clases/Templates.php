<?php 
require('libs/smarty/Smarty.class.php');

class Templates extends Smarty
{
	function __construct()
	{
		parent::__construct();
		$this->setTemplateDir('templates/views');
		$this->setCompileDir('templates/templates_c/');
		$this->setCacheDir('templates/cache/');
		$this->setConfigDir('templates/configs/');
	}
}
?>