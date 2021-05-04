<?php
#include config
include_once 'config.php';
include '../model/Patient.php';

class DaoPatient{

    private  $cnx  ; 
    public function __construct()
    {
        $dao = new Connfig();
        $this->cnx =$dao->connex() ;
        
    }
 
 public function AddPatient(){
 
#code
 }


 public function findPatient($cin){
     $patient = null ;
     $stm = $this->cnx->prepare('SELECT * FROM PATIENT  WHERE  CIN=:cin' ) ;
     $stm->bindvalue(':cin', $cin);
     $stm->execute();

     $result = $stm->fetch(PDO::FETCH_ASSOC);

     if (!empty($result)) {
          $patient = new Patient($result['CIN'] ,  $result['DATENAISSANCE'] ,  $result['E_MAIL'] ,
            $result['ID_PATIENT'] ,  $result['MT_PASSE'] , $result['NOM']  ,
            $result['PRENOM']  ,  $result['SIXE']  ,  $result['TELE']);
     }

     return $patient;



 }




}



?>