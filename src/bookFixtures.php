<?php
require "redbean-boostrap.php";
use RedBeanPHP\R;

R::wipe("book");
R::trashAll(R::findAll("beer"));
R::trashAll(R::findAll("beerkind"));

$book=R::dispense("book");
$book->tilte="les Refrets";
$book->author="Joaquim Du Bellay";
$book->genre="Poésie";
R::store($book);

$kinds= R::dispense("beerkind",3);
$kinds[0]->kind="blonde";
$kinds[1]->kind="brune";
$kinds[2]->kind="noire";

$beers= R::dispense("beer",5);
$beers[0]->name="Leffe";
$beers[0]->kind=$kinds[0];
$beers[0]->strength=6.5;
$kinds[0]->ownBeer[]=$beers[0];

$beers[1]->name="Guiness";
$beers[1]->kind=$kinds[1];
$beers[1]->strength=7;
$kinds[2]->ownBeer[]=$beers[1];

$beers[2]->name="Primus";
$beers[2]->kind=$kinds[0];
$beers[2]->strength=5.7;
$kinds[0]->ownBeer[]=$beers[3];

$beers[3]->name="Heineken";
$beers[3]->kind=$kinds[0];
$beers[3]->strength=5;
$kinds[0]->ownBeer[]=$beers[3];

$beers[4]->name="chimay Bleue";
$beers[4]->kind=$kinds[1];
$beers[4]->strength=5;
$kinds[2]->ownBeeer[]=$beers[4];

R::storeAll($beers);
R::storeAll($kinds);



echo "il y a ".count($kinds[0]->ownBeer).'blonde \n';
$keys=array_keys($kinds[0]->with("ORDER BY name DESC")->ownBeer);
echo "la premiere est ".$kinds[0]->ownBeer[$keys[0]]->name."\n";