
		<?php

    $srv=$_POST['srv'];     
$user= 'root';
$pass = '';
$dbh = new PDO('mysql:host=localhost;dbname=hospital', $user, $pass);
$sth = $dbh->query("Select * From medecin WHERE serviceID='".$srv."'");

  while($row = $sth->fetch(PDO::FETCH_ASSOC)){   //Creates a loop to loop through results
    echo "<option value='".$row['medecinID']."'>".$row['nom']."</option>";
   
}
		?>
