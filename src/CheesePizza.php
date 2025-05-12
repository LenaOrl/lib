<?php
namespace Lena\Zad6;
use Lena\Zad6\Pizza;

class CheesePizza extends Pizza {
    public function __construct()
    {
        parent::__construct("Сырная пицца", "Томатный соус", ["Моцарелла", "Пармезан"]);
    }
}