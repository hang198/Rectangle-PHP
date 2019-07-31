<?php

class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->width * $this->width;
    }

    public function getPerimeter()
    {
        return ($this->width + $this->height) * 2;
    }

    public function display()
    {
        return "Rectangle {" . $this->width . " , " . $this->height . "}";
    }
}

?>