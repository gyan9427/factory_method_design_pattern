<?php

namespace Src\Factories ;

use Src\main\Creator;
use Src\Products\TextProduct;

class TextFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new TextProduct();
        return($product->getProperties());
    }
}