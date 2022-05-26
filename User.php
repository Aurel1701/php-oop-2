<?php
/* classe User/compratore Padre */
class Products {
   protected $nome;
   protected $cognome;
   protected $data;
   protected $citta;
   protected $resgistrato;

   function __construct( String $nome,String $cognome,String $data,String $città,String $resgistrato){
       $this->nome = $nome;
       $this->cognome = $cognome;
       $this->data = $data;
       $this->città = $città;
       $this->nazione = $registarto;
   }
   public function getInfoUser()
    {
        return $this-> nome . " " . $this-> cognome . " " . $this-> data . " " . $this->citta . " " . $this->registrato;
    }
    function getSconto()
    {
        if ($this->registrato) 
        {
            return 20;
        }
        else {
            return 0;
        }
    }
}

?>