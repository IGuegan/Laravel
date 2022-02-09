<?php

namespace App\Models;

class Factory {
    
    public function __construct() {    
    }

    public static function construireVoiture($marque)
    {
        $voiture = '';
        if ($marque === 'opel')
        {
            $voiture = new Opel('Opel1',12342);
        }
        elseif ($marque === 'renault')
        {
            $voiture = new Renault('Renauld1',47363);
        }
        
        return $voiture;
    }
  }

  ?>