<?php
include_once('FoodFactory.php');

$asianFactory = new AsianFoodFactory();

$food= $asianFactory->makeFood();
$expert = $asianFactory->makeExpert();

$food->getDescription();
$expert->getDescription();

// Idem pour le Factory de porte en fer
$frenchFactory = new FrenchFoodFactory();

$food = $frenchFactory->makeFood();
$expert = $frenchFactory->makeExpert();

$food->getDescription();
$expert->getDescription();