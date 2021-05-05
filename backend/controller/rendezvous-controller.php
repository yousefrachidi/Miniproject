<?php 
include '../dao/dao-Rendezvous.php';
include_once '../model/Rendez_vous.php';

$dao = new DaoRendezvous();
 
 $action = $_GET['action'];

 switch ($action) {
     case 'insert':{  
             $CIN   =     $_POST['CIN'] ;
             $ID_RECEPTION  = $_POST['ID_RECEPTION'];
             $ID_RENDEZ    = $_POST['ID_RENDEZ'];
             $start_event   = $_POST['start_event'];
             $end_event  = $_POST['end_event'];
             $TYPE  = $_POST['TYPE'] ;

             $rendevous =new Rendez_vous($CIN ,  $ID_RECEPTION ,  $ID_RENDEZ ,
             $start_event,  $end_event,  $TYPE);
                      
             $result =  $dao->save($rendevous);
             if (!$result) {
                 echo 'Erreur'; 
             }
             else echo 'succes !!'; 

          }
         break;
         case 'load': {
            $data =  $dao->getAll();
            $result =array();
            foreach($data as $row)
            {
                $result[] = array(
                'id'   => $row["ID_RENDEZ"],
                'title'   => $row["title"],
                'start'   => $row["start_event"],
                'end'   => $row["end_event"]
                    );
            }

           echo json_encode($result);

        }break;
        case 'update': {

            if (isset( $_POST['ID_RENDEZ'])) {

                $ID_RENDEZ = $_POST['ID_RENDEZ'];  
                $start_event = $_POST['start_event'];
                $end_event = $_POST['end_event']; 
                $result = $dao->delete($ID_RENDEZ);
                
                   $dao->update($ID_RENDEZ ,$start_event , $end_event );
                   echo 'Update  '.$ID_RENDEZ ; 
            }
         

        }break;
        case 'delete': {
            
            if (isset( $_POST['ID_RENDEZ'])) {
                $ID_RENDEZ = $_POST['ID_RENDEZ'];
                $result = $dao->delete($ID_RENDEZ);
                echo 'Remove '.$ID_RENDEZ.' '.$result;
            }
            

        }break;
     
     default:
         # code...
         break;
 }





?>