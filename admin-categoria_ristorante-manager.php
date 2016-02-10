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

$form = new Form("dataEntry",$categoriaristoranteEntity);

$form->addSection("Categoria Ristorante Management");

$form->addText("nome", "Nome", 40, MANDATORY);


if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'edit';
}

$main->setContent("body",$form->requestAction());


$main->close();