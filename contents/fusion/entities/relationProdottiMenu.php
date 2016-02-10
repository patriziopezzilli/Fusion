<?php
require_once realpath(dirname(__FILE__)) .'/core.php';
require_once realpath(dirname(__FILE__)) .'/entityProdotti.php';
require_once realpath(dirname(__FILE__)) .'/entityMenuRistorante.php';

$prodottimenuRelation = new Relation($prodottiEntity, $menuristoranteEntity);