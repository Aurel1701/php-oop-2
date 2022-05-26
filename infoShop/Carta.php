<?php 

class card extends User{

    // variables
    public  $nomeCarta;
    public  $cognomeCarta;
    public  $numeroCarta;
    public  $cvv;
    public  $scadenzaCarta;
    // / variables

    // construct
    function __construct(string $nomeCarta, string $cognomeCarta, string $numeroCarta, int $cvv, string $scadenzaCarta )
    {
        $this->nomeCarta = $nomeCarta;
        $this->cognomeCarta = $cognomeCarta;
        $this->numeroCarta = $numeroCarta;
        $this->cvv = $cvv;
        $this->scadenzaCarta = $scadenzaCarta;
    } 
    public function getCardName()
    {
        return $this->nomeCarta;
    }

    public function getCradSurname()
    {
        return $this->cognomeCarta;
    }

    public function getCardNumber()
    {
        return $this->numeroCarta;
    }

    public function getCardCvv()
    {
        return $this->cvv;
    }

    public function getCardScadenza()
    {
        return $this->scadenzaCarta;
    }

}
var_dump(getCardCvv());
?>