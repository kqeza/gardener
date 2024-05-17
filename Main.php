<?php

require_once 'Tomato.php';
require_once 'Gardener.php';
require_once 'TomatoBush.php';


$plant = new TomatoBush(3);
$gardener = new Gardener("Саша", $plant);

$gardener->knowledgeBase();

$gardener->harvest();

while (!$plant->allAreRipe()) {
    $gardener->work();
    $gardener->harvest();
}
