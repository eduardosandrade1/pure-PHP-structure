<?php

namespace App\Controllers;

use BadMethodCallException;

class Controller {

    

    public function __call($method, $args)
    {
        if (!in_array($method, array_keys($this->functions))) {
			throw new BadMethodCallException();
		}

		array_unshift($args, $this->s);

		return call_user_func_array($this->functions[$method], $args);
    }

}