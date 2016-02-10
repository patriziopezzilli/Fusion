<?php
/**
 * Created by PhpStorm.
 * User: SS
 * Date: 09/01/2016
 * Time: 14.57
 */
session_start();

require "include/beContent.inc.php";
require_once 'include/content.inc.php';
require "include/auth.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');

$main = new Skin("system");

InitGraphic::getInstance()->createSystemGraphic($main);

$form = new Form("dataEntry",$prenotazioniEntity);

$form->addSection("Gestione Prenotazioni");

$form->addText("surname", "Cognome", 40, MANDATORY);
$form->addText("pasto", "Pasto (Pranzo,Cena)", 40);
$form->addText("numero_posti", "Numero Posti", 11, MANDATORY);
$form->addLongDate("data", "Data", 40, MANDATORY);

$form_sedie = new RelationForm("dataEntry2", $prenotazionitavoliRelation);
$form->addSection("Selezione Tavolo");
$form_sedie->addRelationManager("gestione_tavoli", "Tavoli");
$form->triggers($form_sedie);

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'edit';
}

$main->setContent("body",$form->requestAction());


$main->close();