<?php

namespace Src\Products;

use Src\Interfaces\Product;

class TextProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = "this is the text.";
        return $this->mfgProduct;
    }
}