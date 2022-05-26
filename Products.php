<?php
/* classe padre prodotti */
class Products {
   protected $cibo;
   protected $guinzaglio;
   protected $cuccia;
   protected $ciotola;
   protected $prezzo;

   function __construct( String $cibo,String $guinzaglio,String $cuccia,String $ciotola,String $prezzo){
       $this->cibo = $cibo;
       $this->guinzaglio = $guinzaglio;
       $this->cuccia = $cuccia;
       $this->ciotola = $ciotola;
       $this->prezzo = $prezzo;
   }
   public function getCibo()
   {
       return $this->cibo;
   }
   public function getGuinzaglio()
   {
       return $this->guinzaglio;
   }
   public function getCuccia()
   {
       return $this->cuccia;
   }
   public function getCiotola()
   {
       return $this->ciotola;
   }
}
?>