<html>
	<head>
 
    <meta http-equiv="Refresh" content="0.1;url=../Presentation/source/RIB3.php">
	</head>
	<body>
		<?php

         
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
           
		?>
	</body>
</html>