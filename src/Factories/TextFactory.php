<?php

namespace Src\Factories ;

use Src\Creator;

class TextFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new TextProduct();
        return($product->getProperties());
    }
}