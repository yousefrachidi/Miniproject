<?php
 
class Connfig{

   public function connex()
   {
      try {
            $cnx = new PDO('mysql:host=localhost;dbname=miniproject', 'root', '');
            return $cnx;
         }
          catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
         }
         return null;
   }
    
}



 

?>