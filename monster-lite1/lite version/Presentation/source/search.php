<?php

$srv=$_POST['cin'];     
$user= 'root';
$pass = '';
$dbh = new PDO('mysql:host=localhost;dbname=hospital', $user, $pass);
$sth = $dbh->query( "Select COUNT(CIN) as result From patient WHERE CIN='$srv'");

while($row = $sth->fetch(PDO::FETCH_ASSOC)){
    if($row['result']==1){       echo "<i class='fas fa-check' style=' color:green !important'></i>";
    }
    if($row['result']==0){       echo "CIN n'exist pas";
    }

    
  
}
    



    ?>