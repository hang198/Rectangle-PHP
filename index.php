<?php
include "Rectangle.php";
$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
echo $rectangle->width;
echo $rectangle->height;
echo $rectangle->height = 30;
echo $rectangle->height = 20;
echo $rectangle->width;
echo $rectangle->height;
echo $rectangle->getArea();
echo $rectangle->getPerimeter();
echo("Your Rectangle" . $rectangle->display());

