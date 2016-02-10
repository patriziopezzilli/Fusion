<?php
require_once realpath(dirname(__FILE__)) .'/core.php';
class EntityMenuRistorante extends Entity
{
	public function __construct($database,$name)
	{
		parent::__construct($database,$name);
		$this->setPresentation("m_name");
		$this->addField("m_name", VARCHAR, 255);
		
	}

}
$menuristoranteEntity = new EntityMenuRistorante($database, "menu_ristorante");
