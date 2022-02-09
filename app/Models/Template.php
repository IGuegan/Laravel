<?php

namespace App\Models;

abstract class Template {
    
    public function __construct() {    
    }

    public function getText()
    {
        return $this.getMarque().getOptions();
    }

  }

  ?>