<?php

declare(strict_types=1);

namespace VendorName\ModuleName\Model;

use VendorName\ModuleName\Api\CategoryInterface;

class Product
{

    function __construct
    (
        private CategoryInterface $category
    ) {}


    function getCategoryName(): string 
    {
        return $this->category->getName();
    }

}