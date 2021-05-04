<?php
include_once 'config.php';
include_once '../model/Rendez_vous.php';
include '../dao/dao-Patient.php' ;

class DaoRendezvous{
  
  
  private  $cnx  ; 
  public function __construct()
   {
    $dao = new Connfig();
    $this->cnx =$dao->connex() ;
       
   }
 
  public function save(Rendez_vous $rendez_vous){ 
      $patient = new DaoPatient();
      $isExist = $patient->findPatient($rendez_vous->getCIN());
        
        //test si patient existe !!
      if ($isExist)
      {
            $stm = $this->cnx->prepare('INSERT INTO  rendez_vous(CIN , ID_RECEPTION , ID_RENDEZ , start_event, end_event, type)          
              VALUES(:CIN , :ID_RECEPTION , :ID_RENDEZ , :start_event, :end_event, :typ)');
            $stm->bindvalue(':CIN', $rendez_vous->getCIN() );
            $stm->bindvalue(':ID_RECEPTION', $rendez_vous->getID_RECEPTION() );  
            $stm->bindvalue(':ID_RENDEZ',$rendez_vous->getID_RENDEZ() );
            $stm->bindvalue(':start_event',$rendez_vous->getStart_event() );
            $stm->bindvalue(':end_event',$rendez_vous->getEnd_event() );
            $stm->bindvalue(':typ',$rendez_vous->getTYPE() ); 

          $stm->execute(); 
          return true ;
          
      }
      return false ;  
  }

  public function getAll(){
      $stm = $this->cnx->prepare('SELECT r.* ,CONCAT (  p.PRENOM ," ",  p.NOM  ) as "title"    FROM rendez_vous r join patient p on p.CIN =r.CIN  ');
      $stm->execute();
      $result = array();
      while ($row =   $stm->fetch(PDO::FETCH_ASSOC))
       { 
         array_push($result , $row);
       }
      return $result ;  
  }

  public function update($ID_RENDEZ ,$start_event , $end_event ){
    $stm = $this->cnx->prepare('UPDATE rendez_vous SET 
       start_event=:start_event, end_event=:end_event  WHERE ID_RENDEZ=:ID_RENDEZ');
    $stm->bindvalue(":start_event",$start_event);
    $stm->bindvalue(":end_event",$end_event);
    $stm->bindvalue(":ID_RENDEZ",$ID_RENDEZ);
    $stm->execute();

   

   
  }
  public function delete($ID_RENDEZ){

    $stm = $this->cnx->prepare('DELETE FROM rendez_vous WHERE ID_RENDEZ = :ID_RENDEZ ');
    $stm->bindvalue(':ID_RENDEZ' , $ID_RENDEZ );
    //$stm->execute();
    
    

  } 





}


#Data access object
?>