<?php

require_once realpath(dirname(__FILE__)) .'/core.php';
class EntityGestionetavoli extends Entity
{
    public function __construct($database,$name)
    {
        parent::__construct($database,$name);
        $this->setPresentation("n_sedie");
        $this->addField("n_sedie", INT, 11,MANDATORY);
        $this->addField("stato", VARCHAR, 1);
    
    }

}
$gestionetavoliEntity = new EntityGestionetavoli($database, "gestione_tavoli");