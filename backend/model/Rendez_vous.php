<?php

class Rendez_vous{


private  $CIN  ;
private  $ID_RECEPTION  ;
private  $ID_RENDEZ  ; 
private  $start_event ;
private  $end_event ;
private  $TYPE  ;     

   public function __construct(   $CIN ,  $ID_RECEPTION ,  $ID_RENDEZ ,
         $start_event,  $end_event,  $TYPE ){

        $this->ID_RENDEZ = $ID_RENDEZ;
        $this->CIN =$CIN;
        $this->ID_RECEPTION = $ID_RECEPTION; 
        $this->start_event =$start_event ;
        $this->end_event = $end_event;
        $this->TYPE = $TYPE;

    }
 
   public function getCIN()
   {
      return $this->CIN;
   }
 
    public function setCIN($CIN)
    {
        $this->CIN = $CIN;

        return $this;
    }

    
    public function getID_RECEPTION()
    {
        return $this->ID_RECEPTION;
    }

   
        public function setID_RECEPTION($ID_RECEPTION)
        {
            $this->ID_RECEPTION = $ID_RECEPTION;

            return $this;
        }


        public function getID_RENDEZ()
        {
            return $this->ID_RENDEZ;
        }

 
        public function setID_RENDEZ($ID_RENDEZ)
        {
            $this->ID_RENDEZ = $ID_RENDEZ;

            return $this;
        }
 
         public function getStart_event()
         {
                  return $this->start_event;
         }

    
         public function setStart_event($start_event)
         {
                  $this->start_event = $start_event;

                  return $this;
         }

        
         public function getEnd_event()
         {
                  return $this->end_event;
         }

         
         public function setEnd_event($end_event)
         {
                  $this->end_event = $end_event;

                  return $this;
         }

         
         public function getTYPE()
         {
                  return $this->TYPE;
         }

        
         public function setTYPE($TYPE)
         {
                  $this->TYPE = $TYPE;

                  return $this;
         }
}


?>