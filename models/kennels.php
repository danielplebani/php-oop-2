<?php
class Kennels extends Shop
{
    public function __construct($img, $title, $price, $type, $category)
    {
        parent::__construct($img, $title, $price, $type, $category);
    }
}