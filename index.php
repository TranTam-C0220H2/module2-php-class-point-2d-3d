<?php
include_once 'class/Point2D.php';
include_once 'class/Point3D.php';
$point2 = new Point2D(3,4);
echo $point2->toString();
$point3 = new Point3D(3,4,5);
echo $point3->toString();
