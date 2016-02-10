
<?php
require_once realpath(dirname(__FILE__)) .'/entityMenuRistorante.php';
require_once realpath(dirname(__FILE__)) .'/entityCategoriaRistorante.php';
require_once realpath(dirname(__FILE__)) .'/entityProdotti.php';
require_once realpath(dirname(__FILE__)) .'/entitySezione.php';
require_once realpath(dirname(__FILE__)) .'/entityFrammenti.php';
require_once realpath(dirname(__FILE__)) .'/relationProdottiMenu.php';
require_once realpath(dirname(__FILE__)) .'/entityPrenotazioni.php';
require_once realpath(dirname(__FILE__)) .'/entityGestionetavoli.php';
require_once realpath(dirname(__FILE__)) .'/relationPrenotazioniTavoli.php';

$menuristoranteEntity->connect();
$categoriaristoranteEntity->connect();
$prodottiEntity->connect();
$sezioneEntity->connect();
$frammentiEntity->connect();
$prodottimenuRelation->connect();
$prenotazioniEntity->connect();
$gestionetavoliEntity->connect();
$prenotazionitavoliRelation->connect();
