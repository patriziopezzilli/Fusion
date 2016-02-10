<?php
/**
 * Created by PhpStorm.
 * User: SS
 * Date: 10/01/2016
 * Time: 15.25
 */
require_once realpath(dirname(__FILE__)) .'/core.php';
class EntitySezione extends Entity
{
    public function __construct($database,$name)
    {
        parent::__construct($database,$name);
        $this->setPresentation("id");
        $this->addField("descrizione", VARCHAR, 255,MANDATORY);
    }

}
$sezioneEntity = new EntitySezione($database, "sezione");