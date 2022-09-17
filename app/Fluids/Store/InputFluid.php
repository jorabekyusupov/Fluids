<?php

namespace App\Fluids\Store;

use App\Fluids\Fluid;

class InputFluid extends Fluid
{
    public function __construct($name)
    {
        $this->name = $name;
        $this->type = 'text';
    }

    public function fill($item, $data)
    {
        $value = $data[$this->name];
        $item->{$this->name} = $value;

    }
}
