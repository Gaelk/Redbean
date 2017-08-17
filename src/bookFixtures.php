<?php
require "redbean-boostrap.php";
use RedBeanPHP\R;

$book=R::dispense("book");
$book->tilte="les chants de Maldoror";
$book->author="Lautréamont";

R::store($book);

$book=R::dispense("book");
$book->tilte="les Refrets";
$book->author="Joaquim Du Bellay";
$book->genre="Poésie";
R::store($book);