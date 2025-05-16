<?php

namespace Lena\Zad6;

class PizzaStore
{
    public function createPizza(string $type): void;
    public function orderPizza(string $type): void   
  {
    $pizza=$this->createPizza($type);
    $pizza->prepare();
    $pizza->cut();
}
}
