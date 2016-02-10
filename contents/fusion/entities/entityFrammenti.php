<?php
/**
 * Created by PhpStorm.
 * User: SS
 * Date: 10/01/2016
 * Time: 15.50
 */

require_once realpath(dirname(__FILE__)) .'/core.php';

class EntityFrammenti extends Entity
{
    public function __construct($database,$name)
    {
        parent::__construct($database,$name, WITH_OWNER);
        $this->setPresentation("owner");
        $this->addField("titolo", VARCHAR, 255,MANDATORY);
        $this->addField("descrizione", VARCHAR, 255);
        $this->addField("sottotitolo", VARCHAR, 255);

    }
    
     
 }


$frammentiEntity = new EntityFrammenti($database, "frammenti");
$frammentiEntity->addReference($sezioneEntity, "id_sezione");
$frammentiEntity->addReference($imageEntity, "foto");