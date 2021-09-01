<?php

namespace Src\Factories ;

use Src\Creator;

class GraphicFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new TextProduct();
        return($product->getProperties());
    }
}