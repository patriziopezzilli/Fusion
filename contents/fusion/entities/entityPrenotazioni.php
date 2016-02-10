<?php

require_once realpath(dirname(__FILE__)) .'/core.php';
class EntityPrenotazioni extends Entity
{
    public function __construct($database,$name)
    {
        parent::__construct($database,$name, WITH_OWNER);
       $this->setPresentation("surname, numero_posti, data, pasto");
        $this->addField("surname", VARCHAR, 255, MANDATORY);
        $this->addField("pasto", VARCHAR, 255);
        $this->addField("numero_posti", INT, 255);
        $this->addField("data", DATE);
    }
    
      public function save($values_condition)
    {
        $values_condition["owner"] = $_SESSION["user"]["username"];
        return parent::save($values_condition);
    }

}
$prenotazioniEntity = new EntityPrenotazioni($database, "prenotazioni");
