<?php
$host = 'localhost';
$user = 'root';
$dbname = 'hospital';

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
$pdo = new PDO($dsn, $user);

function existpatient($cin){
  global $pdo;
  $stmt = $pdo->query('Select * FROM patient');
  while ($row = $stmt->fetch()){
    if ($row['CIN'] == $cin )
      return true;
  }
  return false;
}
function existemedecin($medecinid){
  global $pdo;
  $comptes = $pdo->query('Select * FROM medecin');
  while($row = $comptes->fetch(PDO::FETCH_ASSOC)){
    if ($row['num'] == $accountNum )
      return true;
  }
  return false;
}
function Nouveaumedecin($nom,$serviceid){
    global $pdo;
   
    
    $req = 'INSERT INTO `medecin`( `nom`, `serviceID`) VALUES (?,?)';
         $query = $pdo->prepare($req);
         $query->execute([$nom,$serviceid]);
        echo"the doctor has been added succesfully";
    
}
function Nouveauservice($serviceID,$nom){
    global $pdo;
   
    
    $req = 'INSERT INTO `service`(`serviceID`, `Nom`) VALUES (?,?)';
         $query = $pdo->prepare($req);
         $query->execute([$serviceID,$nom]);
        echo"the service has been added succesfully";
    
}
function Newpatient($cin,$nom,$daten,$adresse){
    global $pdo;
    $sql = 'INSERT INTO `patient`(`CIN`, `Nom`, `daten`, `Adresse`) VALUES(?,?,?,?)';
      $query = $pdo->prepare($sql);
      $query->execute([$cin,$nom,$daten,$adresse]);
    
    
  
}


function DisplayInfos($cin){
    global $pdo;
    $query = $pdo->query('Select * From patient');
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
        if($row['CIN'] == $cin){
            echo "nom: ".$row['Nom']."<br> date naissance:".$row['daten'];
            echo "<br>";
           
        }
    }
}
function Supprime($cin){
    global $pdo;
    $query = 'Delete  FROM patient Where CIN = ?';
    $req = $pdo->prepare($query);
    $req->execute([$cin]);
    echo"this patient  has been deleted succesfully";
}
function Supprimeservice($a){
    global $pdo;
    $query = 'Delete  FROM service Where Nom = ?';
    $req = $pdo->prepare($query);
    $req->execute([$a]);
   
        echo"    <meta http-equiv='Refresh' content='0.1;url=SRV3.php'>";
}
    
function hospitalinfo($num){
   global $pdo;
    $query = $pdo->query('Select * From hospitalisatio');
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
        if($row['num'] == $num){
            echo  "<table><tr>IDMedecin: <td>".$row['IDMedecin']."</td><tr><td >idpatient:".$row['IDpatient']."</td></tr></table>";
            echo "<br>";
        }    
        }
}
function DisplayInfosmedecin($medecinid){
    global $pdo;
    $query = $pdo->query('Select * From medecin');
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
        if($row['medecinID'] == $medecinid){
            echo $row['nom']." ".$row['serviceID'];
            echo "<br>";
           
        }
    }
}

function supmed($medid){
    global $pdo;
    $query = 'Delete  FROM medecin Where medecinID = ?';
    $req = $pdo->prepare($query);
    $req->execute([$medid]);
    echo"this doctor  has been deleted succesfully";
}
function modifierlessinfo($cin,$nom,$date,$adresse){
     global $pdo;
  $query = ' UPDATE `patient` SET `Nom`=[$nom],`daten`=[$date],`Adresse`=[$adresse] WHERE  CIN=?';
    $req = $pdo->prepare($query);
    $req->execute([$cin]);

}
function mededitinfo($medecinID,$nom,$serviceID){
     global $pdo;
  $query = ' UPDATE `medecin` SET `medecinID`=[$medecinID],`nom`=[$nom],`serviceID`=[$serviceID] WHERE  medecinID=?';
    $req = $pdo->prepare($query);
    $req->execute([$medecinID]);

}
function addservice($serviceID,$nom){
    global $pdo;
   
    
    $req = 'INSERT INTO `service`(`serviceID`, `Nom`) VALUES (?,?)';
         $query = $pdo->prepare($req);
         $query->execute([$serviceID,$nom]);
        echo"http://localhost/monster-lite/lite%20version/Presentation/source/SRV3.php";
    
}
function addho($cin,$medecinID){
        global $pdo;
   
    
    $req = 'INSERT INTO `hospitalistion`( `CIN`, `medecinID`) VALUES (?,?)';
         $query = $pdo->prepare($req);
         $query->execute([$cin,$medecinID]);
          echo"<meta http-equiv='Refresh' content='0.1;url=../Presentation/source/HOS3.php'>";
       
}
    

?>