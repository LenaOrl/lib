<?php 
namespace Lena\Zad6;
use Lena\Zad6\Pizza;

class VeggiePizza extends Pizza
{
    public function __construct()
    {
        parent::__construct("Овощная пицца", "Песто", ["Оливки", "Грибы", "Помидоры"]);
    }
}