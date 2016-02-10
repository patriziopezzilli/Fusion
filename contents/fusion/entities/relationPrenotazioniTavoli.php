<?php
require_once realpath(dirname(__FILE__)) .'/core.php';
require_once realpath(dirname(__FILE__)) .'/entityGestionetavoli.php';
require_once realpath(dirname(__FILE__)) .'/entityPrenotazioni.php';

$prenotazionitavoliRelation = new Relation($prenotazioniEntity, $gestionetavoliEntity);