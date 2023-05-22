<?php

namespace App;

class Developer extends Worker
{

   public function rule ()
   {
       print_r("im developer");
   }
}