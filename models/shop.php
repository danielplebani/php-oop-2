<?php

require_once __DIR__ . '/../trait/img.php';
require_once __DIR__ . '/../trait/title.php';
require_once __DIR__ . '/../trait/type.php';
require_once __DIR__ . '/../trait/category.php';


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

    use ImgTrait;

    use TitleTrait;

    public function getPrice()
    {
        if (is_numeric($this->price)) {
            return $this->price;
        } else {
            throw new Exception('Il prezzo inserito non é un numero');
        }
    }
    
    use TypeTrait;

    use CategoryTrait;
   
}


require __DIR__ . '/food.php';
require __DIR__ . '/games.php';
require __DIR__ . '/kennels.php';
require __DIR__ . '/cleaning_objects.php';

//cibo cani
$RoyalCanin = new Food ('./img/RoyalCanin.jpg', 'Royal Canin', 14.99, 'food', 'dog');
$Eukanuba = new Food ('./img/Eukanuba.jpg', 'Eukanuba', 18.99, 'food', 'dog');
//cibo gatti
$Felix = new Food ('./img/Felix.jpg', 'Felix', 11.99, 'food', 'cat');
$Sheba = new Food ('./img/Sheba.webp', 'Sheba', 9.99, 'food', 'cat');

//giochi cani
$Kong = new Games ('./img/Kong.webp', 'Kong', 5.99, 'games', 'dog');
$Rugby = new Games ('./img/Rugby.jpg', 'Rugby', 3.99, 'games', 'dog');
//giochi gatti
$Fish = new Games ('./img/Fish.jpg', 'Fish', 6.99, 'games', 'cat');
$Mouse = new Games ('./img/Mouse.jpg', 'Mouse', 2.99, 'games', 'cat');

//cucce cani
$Matilda = new Kennels ('./img/Matilda.jpg', 'Matilda', 34.99, 'kennels', 'dog');
$Ferplast = new Kennels ('./img/Ferplast.jpg', 'Ferplast', 28.99, 'kennels', 'dog');
//cucce gatti
$Domus = new Kennels ('./img/Domus.webp', 'Domus', 22.99, 'kennels', 'cat');
$Glait = new Kennels ('./img/Glait.jpg', 'Glait', 19.99, 'kennels', 'cat');

//oggetti_pulizia cani
$Doccino = new CleaningObjects ('./img/Doccino.jpg', 'Doccino', 14.99, 'cleaning objects', 'dog');
$Salviette = new CleaningObjects ('./img/Salviette.jpg', 'Salviette', 7.99, 'cleaning objects', 'dog');
//oggetti_pulizia gatti
$Pettine = new CleaningObjects ('./img/Pettine.jpg', 'Pettine', 3.99, 'cleaning objects', 'cat');
$Pala = new CleaningObjects ('./img/Pala.jpeg', 'Pala', 10.99, 'cleaning objects', 'cat');