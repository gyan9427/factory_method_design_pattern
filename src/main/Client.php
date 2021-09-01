<?php

namespace Src\main;
use Src\Factories\GraphicFactory;
use Src\Factories\TextFactory;

class Client
{
    private $someGraphicObject;
    private $someTextObject;

    public function __construct()
    {
        $this->someGraphicObject = new GraphicFactory();
        echo $this->someGraphicObject->startFactory()."<br />";
        $this->someTextObject = new TextFactory();
        echo $this->someTextObject->startFactory()."<br />";
    }
}
