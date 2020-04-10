<?php
include_once 'Point2D.php';

class Point3D extends Point2D
{
    protected $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setXYZ($x, $y, $z)
    {
        $this->setXY($x, $y);
        $this->z = $z;
    }

    public function getXYZ()
    {
        $array = $this->getXY();
        array_push($array, $this->getZ());
        return $array;
    }

    function toString()
    {
        return '(' . implode(', ', $this->getXYZ()) . ')';
    }
}