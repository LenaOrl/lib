<?php
namespace Lena\Zad6;
use Lena\Zad6\Pizza;

class PepperoniPizza extends Pizza 
{
    public function __construct() {
        parent::__construct("Пепперони", "Томатный соус", ["Пепперони", "Моцарелла"]);
    }
}