<?php

namespace App\Models;

use App\Model;

class Product extends Model
{
    protected const TABLE = 'products';

    public string $title;
    public int $price;
}