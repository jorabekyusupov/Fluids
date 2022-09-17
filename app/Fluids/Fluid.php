<?php

namespace App\Fluids;

class Fluid
{
    protected $name;
    protected $type;

    public function make($name)
    {
        $class = get_called_class();
        return new $class($name);
    }

}
