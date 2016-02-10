<?php
/**
 * Created by PhpStorm.
 * User: SS
 * Date: 09/01/2016
 * Time: 15.02
 */ session_start();

require "include/beContent.inc.php";
require_once 'include/content.inc.php';
require "include/auth.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');

$main = new Skin("system");

InitGraphic::getInstance()->createSystemGraphic($main);

$form = new Form("dataEntry",$prodottiEntity);

$form->addSection("Prodotti Management");

$form->addText("item_name", "Nome", 40, MANDATORY);
$form->addText("tag", "TAG", 40);
$form->addText("price", "Prezzo", 40, MANDATORY);
$form->addText("portata", "Portata (es. PRIMO)", 40, MANDATORY);

$form_menu = new RelationForm("dataEntry2", $prodottimenuRelation);
$form->addSection("Seleziona Menu");
$form_menu->addRelationManager("menu_ristorante", "Menu");
$form->triggers($form_menu);


if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'edit';
}

$main->setContent("body",$form->requestAction());


$main->close();