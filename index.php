<?php

session_start();
require_once "include/beContent.inc.php";
require_once(realpath(dirname(__FILE__)).'/include/view/template/InitGraphic.php');


$main = new Skin();
InitGraphic::getInstance()->createGraphic($main);

$home = new Skinlet("home");

$frammenti= new Content($frammentiEntity,$imageEntity);
$main->setContent('frammenti', $frammenti->get()); 
// $main->setContent('body', $home->get());

$menu= new Content($prodottiEntity);
$main->setContent('menu', $menu->get());

$staf = new Skinlet("staf");
$frammenti_1= new Content($frammentiEntity,$imageEntity);
$frammenti_1->apply($staf);
$main->setContent('frammenti_1', $staf->get());

$desc = new Skinlet("desc");
$frammenti_2= new Content($frammentiEntity);
$frammenti_2->apply($desc);
$main->setContent('frammenti_2', $desc->get());

$gallery = new Skinlet("gallery");
$frammenti_3= new Content($frammentiEntity,$imageEntity);
$frammenti_3->apply($gallery);
$main->setContent('frammenti_3', $gallery->get());

$mappa = new Skinlet("mappa");
$frammenti_4= new Content($frammentiEntity,$imageEntity);
$frammenti_4->apply($mappa);
$main->setContent('frammenti_4', $mappa->get());


$main->close();
