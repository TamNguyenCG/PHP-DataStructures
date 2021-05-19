<?php
include_once "Gender.php";
include_once "Dancer.php";
include_once "SquareDance.php";

$dance1 = new Dancer("Ngan", Gender::MALE);
$dance2 = new Dancer("Thanh", Gender::MALE);
$dance3 = new Dancer("Tien", Gender::MALE);
$dance4 = new Dancer("Linh", Gender::FEMALE);
$dance5 = new Dancer("Dung", Gender::FEMALE);

$square = new SquareDance();
$square->addDance($dance1);
$square->addDance($dance2);
$square->addDance($dance3);
$square->addDance($dance4);
$square->addDance($dance5);

echo $square->pairDancer();