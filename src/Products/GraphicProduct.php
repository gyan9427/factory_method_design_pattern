<?php

namespace Src\Products;

use Src\Interfaces\Product;

class GraphicProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = "This is a graphic.<3";
        return $this->mfgProduct;
    }
}