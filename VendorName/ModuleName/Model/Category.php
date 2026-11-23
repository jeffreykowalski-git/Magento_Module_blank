<?php

declare(strict_types=1);

namespace VendorName\ModuleName\Model;
use Vendorname\ModuleName\Api\CategoryInterface;

class Category implements CategoryInterface
{

    public function getName(): string
    {
        return 'Category Name';
    }

}