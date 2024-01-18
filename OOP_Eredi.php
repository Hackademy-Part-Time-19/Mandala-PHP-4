<?php

//ESERCIZIO 1

class Continent{
    public $nameContinent;

    public function __construct($continent)
    {
        $this->nameContinent = $continent;
    }
}

class Country extends Continent{
    public $nameCountry;

    public function __construct($continent, $country)
    {
        parent::__construct($continent);
        $this->nameCountry = $country;
    }
}

class Region extends Country{
    public $nameRegion;

    public function __construct($continent, $country, $region)
    {
        parent::__construct($continent, $country);
        $this->nameRegion = $region;
    }
}

class Province extends Region{
    public $nameProvince;

    public function __construct($continent, $country, $region, $province)
    {
        parent::__construct($continent, $country, $region);
        $this->nameProvince = $province;
    }
}

class City extends Province{
    public $nameCity;

    public function __construct($continent, $country, $region, $province, $city)
    {
        parent::__construct($continent, $country, $region, $province);
        $this->nameCity = $city;
    }
}

class Street extends City{
    public $nameStreet;

    public function __construct($continent, $country, $region, $province, $city, $street)
    {
        parent::__construct($continent, $country, $region, $province, $city);
        $this->nameStreet = $street;
    }

    public function getMyCurrentLocation(){

        return "Mi trovo in " . $this->nameContinent . ", " . $this->nameCountry . ", " . $this->nameRegion . ", " . $this->nameProvince . ", " . $this->nameCity . ", " . $this->nameStreet . ".\n";
    }
}

$Indirizzo1 = new Street("Europa", "Italia", "Sicilia", "PA", "Palermo", "Piazza Verdi 1");

echo $Indirizzo1->getMyCurrentLocation(); 

//ESERCIZIO 2

class Vertebrates {
    
    public function __construct() {
        $this->Vertebrati();
    }

    protected function Vertebrati() {
        return "Sono un animale Vertebrato\n";
    }
}

class WarmBlooded extends Vertebrates {
    
    public function __construct() {
        parent::__construct();
    }

    protected function SangueCaldo() {
        return "Sono un animale a Sangue Caldo\n";
    }
}

class ColdBlooded extends Vertebrates {
    
    public function __construct() {
        parent::__construct();
    }

    protected function SangueFreddo() {
        return "Sono un animale a Sangue Freddo\n";
    }
}

class Mammals extends WarmBlooded {
    
    public function __construct() {
        parent::__construct();
        echo $this->Vertebrati();
        echo $this->SangueCaldo();
        echo "Ciao!\n\n";
    }
}

class Birds extends WarmBlooded {
    
    public function __construct() {
        parent::__construct();
        echo $this->Vertebrati();
        echo $this->SangueCaldo();
        echo "Cip Cip!\n\n";
    }
}

class Fish extends ColdBlooded {
    
    public function __construct() {
        parent::__construct();
        echo $this->Vertebrati();
        echo $this->SangueFreddo();
        echo "Splash!\n\n";
    }
}

class Reptiles extends ColdBlooded {
    
    public function __construct() {
        parent::__construct();
        echo $this->Vertebrati();
        echo $this->SangueFreddo();
        echo "sssssss!\n\n";
    }
}

class Amphibians extends ColdBlooded {
    
    public function __construct() {
        parent::__construct();
        echo $this->Vertebrati();
        echo $this->SangueFreddo();
        echo "Gra Gra!\n";
    }
}

$umano = new Mammals();
$uccello = new Birds();
$magikarp = new Fish();
$serpente = new Reptiles();
$rana = new Amphibians();
