<?php

namespace Src\Factories ;

use Src\Creator;
use Src\Products\GraphicProduct;

class GraphicFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new GraphicProduct();
        return($product->getProperties());
    }
}