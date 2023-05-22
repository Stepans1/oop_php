<?php

namespace App;

class  Visitor
{
    public string $rule;


    public function visit()
    {
        print_r("Im viisiit");
    }
}