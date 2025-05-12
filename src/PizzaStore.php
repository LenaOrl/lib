<?php

namespace Lena\Zad6;

class PizzaStore
{
    public function createPizza(string $type) 
    {
      switch ($type) {
          case 'pepperoni':
              return new PepperoniPizza();
              case 'chesse':
                return new CheesePizza();
              case 'veggie':
                  return new VeggiePizza();
              return null;
              }
          }
    public function orderPizza(string $type): void   
  {
    $pizza=$this->createPizza($type);
    $pizza->prepare();
    $pizza->cut();
}
}
