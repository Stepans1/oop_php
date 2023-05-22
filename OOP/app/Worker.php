<?php

namespace App;

class  Worker
{
   private string $name;
   public int $age;
   public array $hours;

   public function __construct($name,$age,$hours)
   {
       $this->name=$name;
       $this->age=$age;
       $this->hours=$hours;
   }
   public function setName($value)
   {
       $this->name=$value;
   }
   public function getName():string
   {
       return $this->name;
   }

    public function rule()
    {
        print_r("Im worker");
    }
}