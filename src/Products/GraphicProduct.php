<?php

namespace Src\Products;

use Src\Interfaces\Product;

class GraphicProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct="<!doctype html><html><head><meta charset='UTF-8' />";
        $this->mfgProduct.="<title>Map Factory</title>";
        $this->mfgProduct.="</head><body>";
        $this->mfgProduct.="<img src='https://cdn.pixabay.com/photo/2021/08/24/15/38/sand-6570980_960_720.jpg' width='500' height='500' />";
        $this->mfgProduct.="</body></html>"; 
        return $this->mfgProduct;
    }
}