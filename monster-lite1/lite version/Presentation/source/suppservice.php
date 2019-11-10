<?php
$a=$_REQUEST['q'];
include '../../DAObanque/DB.inc';
$user= 'root';
$pass = '';
$dbh = new PDO('mysql:host=localhost;dbname=hospital', $user, $pass);
$sth = $dbh->query( "Select COUNT(nom) as result From medecin WHERE serviceID='$a'");

while($row = $sth->fetch(PDO::FETCH_ASSOC)){
    if($row['result']>0){       echo "

      <div id='myModal' class='modal' style=' display: block; 
      position: fixed;
      z-index: 1; 
      padding-top: 100px; 
      left: 0;
      top: 0;
      width: 100%; 
      height: 100%; 
      overflow: auto; 
      background-color: rgb(0,0,0) ; 
      background-color: none !important; '>
      <div id='modal-content' style='background-color: rgba(255,0,0,0.3) !important;
      margin: auto;
      padding: 20px;
      border: 1px solid red;
      width: 80%;
      border-radius:25px;'>
      <span onclick='document.getElementById(";echo'"myModal"';echo").style.display=";echo'"none"'; echo"' class='close' style=' color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;'>&times;</span>
      <p style='color:white; font-size:27px;'> <span color='red' ><i class='fas fa-exclamation-triangle'></i></span>    Impossible de supprimer ce service vous devez supprimer tous les médecins de ce service<p>
     </div>
     </div>
   
               
        ";
    }
    if($row['result']==0){ 
      Supprimeservice($a);
    
    }

    
  
}
    



    ?>