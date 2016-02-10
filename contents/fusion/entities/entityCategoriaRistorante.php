
<?php
require_once realpath(dirname(__FILE__)) .'/core.php';
class EntityCategoriaRistorante extends Entity
{
public function __construct($database,$name)
{
parent::__construct($database,$name);
$this->setPresentation("nome");
$this->addField("nome", VARCHAR, 255);


}

}
$categoriaristoranteEntity = new EntityCategoriaRistorante($database, "categoria_ristorante");