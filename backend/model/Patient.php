<?php

class Patient
{


private $CIN  ,$DATENAISSANCE ,$E_MAIL  ,$ID_PATIENT  ,$MT_PASSE ,$NOM ,$PRENOM ,$SIXE ,$TELE ;

public function __construct($CIN  ,$DATENAISSANCE ,$E_MAIL  ,$ID_PATIENT  ,$MT_PASSE ,$NOM ,$PRENOM ,$SIXE ,$TELE)
{
  $this->CIN =    $CIN  ;
  $this->DATENAISSANCE =   $DATENAISSANCE ;
  $this->E_MAIL =   $E_MAIL  ;
  $this->ID_PATIENT = $ID_PATIENT  ;
  $this->MT_PASSE =  $MT_PASSE ;
  $this->NOM =  $NOM ;
  $this->PRENOM =  $PRENOM ;
  $this->SIXE =  $SIXE ;
  $this->TELE =  $TELE ;
    
}

 

/**
 * Get the value of CIN
 */ 
public function getCIN()
{
return $this->CIN;
}

/**
 * Set the value of CIN
 *
 * @return  self
 */ 
public function setCIN($CIN)
{
$this->CIN = $CIN;

return $this;
}

/**
 * Get the value of DATENAISSANCE
 */ 
public function getDATENAISSANCE()
{
return $this->DATENAISSANCE;
}

/**
 * Set the value of DATENAISSANCE
 *
 * @return  self
 */ 
public function setDATENAISSANCE($DATENAISSANCE)
{
$this->DATENAISSANCE = $DATENAISSANCE;

return $this;
}

/**
 * Get the value of E_MAIL
 */ 
public function getE_MAIL()
{
return $this->E_MAIL;
}

/**
 * Set the value of E_MAIL
 *
 * @return  self
 */ 
public function setE_MAIL($E_MAIL)
{
$this->E_MAIL = $E_MAIL;

return $this;
}

/**
 * Get the value of ID_PATIENT
 */ 
public function getID_PATIENT()
{
return $this->ID_PATIENT;
}

/**
 * Set the value of ID_PATIENT
 *
 * @return  self
 */ 
public function setID_PATIENT($ID_PATIENT)
{
$this->ID_PATIENT = $ID_PATIENT;

return $this;
}

/**
 * Get the value of MT_PASSE
 */ 
public function getMT_PASSE()
{
return $this->MT_PASSE;
}

/**
 * Set the value of MT_PASSE
 *
 * @return  self
 */ 
public function setMT_PASSE($MT_PASSE)
{
$this->MT_PASSE = $MT_PASSE;

return $this;
}

/**
 * Get the value of NOM
 */ 
public function getNOM()
{
return $this->NOM;
}

/**
 * Set the value of NOM
 *
 * @return  self
 */ 
public function setNOM($NOM)
{
$this->NOM = $NOM;

return $this;
}

/**
 * Get the value of PRENOM
 */ 
public function getPRENOM()
{
return $this->PRENOM;
}

/**
 * Set the value of PRENOM
 *
 * @return  self
 */ 
public function setPRENOM($PRENOM)
{
$this->PRENOM = $PRENOM;

return $this;
}

/**
 * Get the value of SIXE
 */ 
public function getSIXE()
{
return $this->SIXE;
}

/**
 * Set the value of SIXE
 *
 * @return  self
 */ 
public function setSIXE($SIXE)
{
$this->SIXE = $SIXE;

return $this;
}

/**
 * Get the value of TELE
 */ 
public function getTELE()
{
return $this->TELE;
}

/**
 * Set the value of TELE
 *
 * @return  self
 */ 
public function setTELE($TELE)
{
$this->TELE = $TELE;

return $this;
}
}



?>