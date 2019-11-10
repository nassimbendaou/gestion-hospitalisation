<?php
echo"
<html>
	<head>
 
    <meta http-equiv='Refresh' content='0.1;url=http://localhost/monster-lite/lite%20version/metie/traitement5.php?q=".$_REQUEST['q']."'>
	</head>
	<body>";
		

         
              $user= 'root';
              $pass = '';
              $medecin=$_POST['medecinID'];
              $nom=$_POST['nom'];
              $service=$_POST['serviceID'];
            
              $dbh = new PDO('mysql:host=localhost;dbname=hospital', $user, $pass);
              $sql = "UPDATE medecin SET  nom=?, serviceID=? WHERE medecinID=?";
               $sth= $dbh->prepare($sql);
               $sth->execute([ $nom, $service,$medecin]);
               $dbh = null;
           
		echo"
	</body>
</html>";?>