<?php
/**
 * Created by PhpStorm.
 * User: SS
 * Date: 09/01/2016
 * Time: 11.44
 */
session_start();

require "include/beContent.inc.php";
require_once 'include/content.inc.php';
require "include/auth.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');

$main = new Skin("system");

InitGraphic::getInstance()->createSystemGraphic($main);

$form = new Form("dataEntry",$frammentiEntity, WITH_OWNER);

$form->addSection("Gestione Contenuti");

$form->addText("titolo", "Titolo", 40, MANDATORY);
$form->addText("sottotitolo", "Sottotitolo", 40, MANDATORY);
$form->addEditor("descrizione", "Descrizione", 40, MANDATORY);

$imageForm=new ImageForm('imageEntry',$frammentiEntity);
$imageForm->addImage('foto','Foto');
$form->triggers($imageForm);



if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'edit';
}

$main->setContent("body",$form->requestAction());


$main->close();