<?php
/**
 * Created by PhpStorm.
 * User: <?php
/**
 * Created by PhpStorm.
 * User: SS
 * Date: 09/01/2016
 * Time: 14.59
 */
require_once realpath(dirname(__FILE__)) .'/core.php';
class EntityProdotti extends Entity
{
    public function __construct($database,$name)
    {
        parent::__construct($database,$name);
        $this->setPresentation("item_name, id_categoriaristorante, id_menu");
        $this->addField("item_name", VARCHAR, 255,MANDATORY);
        $this->addField("portata", VARCHAR, 255);
        $this->addField("tag", VARCHAR, 255);
        $this->addField("price", VARCHAR,11,MANDATORY);
    
    }

}
$prodottiEntity = new EntityProdotti($database, "prodotti");
$prodottiEntity->addReference($menuristoranteEntity, "id_menu");