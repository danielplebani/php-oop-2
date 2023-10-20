<?php

class Shop
{
    public $img;
    public $title;

    public $price;
    public $type;
    public $category;

    public function __construct($img, $title, $price, $type, $category)
    {
        $this->img = $img;
        $this->title = $title;
        $this->price = $price;
        $this->type = $type;
        $this->category = $category;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getType()
    {
        return $this->type;
    }
}


//cibo cani
$RoyalCanin = new Shop ('./img/RoyalCanin.jpg', 'Royal Canin', '14.99$', 'food', 'dog');
$Eukanuba = new Shop ('./img/Eukanuba.jpg', 'Eukanuba', '18.99$', 'food', 'dog');
//cibo gatti
$Felix = new Shop ('./img/Felix.jpg', 'Felix', '11.99$', 'food', 'cat');
$Sheba = new Shop ('./img/Sheba.webp', 'Sheba', '9.99$', 'food', 'cat');

//giochi cani
$Kong = new Shop ('./img/Kong.webp', 'Kong', '5.99$', 'games', 'dog');
$Rugby = new Shop ('./img/Rugby.jpg', 'Rugby', '3.99$', 'games', 'dog');
//giochi gatti
$Fish = new Shop ('./img/Fish.jpg', 'Fish', '6.99$', 'games', 'cat');
$Mouse = new Shop ('./img/Mouse.jpg', 'Mouse', '2.99$', 'games', 'cat');

//cucce cani
$Matilda = new Shop ('./img/Matilda.jpg', 'Matilda', '34.99$', 'kennels', 'dog');
$Ferplast = new Shop ('./img/Ferplast.jpg', 'Ferplast', '28.99$', 'kennels', 'dog');
//cucce gatti
$Domus = new Shop ('./img/Domus.webp', 'Domus', '22.99$', 'kennels', 'cat');
$Glait = new Shop ('./img/Glait.jpg', 'Glait', '19.99$', 'kennels', 'cat');


//oggetti_pulizia cani
$Doccino = new Shop ('./img/Doccino.jpg', 'Doccino', '14.99$', 'cleaning objects', 'dog');
$Salviette = new Shop ('./img/Salviette.jpg', 'Salviette', '7.99$', 'cleaning objects', 'dog');
//oggetti_pulizia gatti
$Pettine = new Shop ('./img/Pettine.jpg', 'Pettine', '3.99$', 'cleaning objects', 'cat');
$Pala = new Shop ('./img/Pala.jpeg', 'Pala', '10.99$', 'cleaning objects', 'cat');