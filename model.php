<?php
namespace Lib;

class Farm{
  public $Animals;

  function __construct($Animals)
  {
      $this->Animals=$Animals;
  }

  function getResultSumProduct()
      {
          $sum=0;
          foreach ($this->Animals as $Animal)
              {
                  $sum=$sum+$Animal->quantity();
              }
          return $sum;
      }
}

interface Animal
{
    function quantity();
}

class Cow  implements Animal
{
    public function quantity()
    {
                         $id = 'id_'.uniqid();
                         $ProductQuantity=  random_int ( 8 , 12 );
                         return $ProductQuantity;
    }
}

class Chicken implements Animal
{
    public function quantity()
    {
                        $id = 'id_'.uniqid();
                        $ProductQuantity=  random_int ( 0 , 1 );
                        return $ProductQuantity;
    }
}


