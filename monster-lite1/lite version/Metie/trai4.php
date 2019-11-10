<html>
	<head>
 
    <meta http-equiv="Refresh" content="0.1;url=../Presentation/source/SRV3.php">
	</head>
	<body>
		<?php

         
              $user= 'root';
              $pass = '';
            
              $nom=$_POST['nom'];
              
            
              $dbh = new PDO('mysql:host=localhost;dbname=hospital', $user, $pass);
              $sql = "INSERT INTO `service`( `Nom`) VALUES (?)";
              $query = $dbh->prepare($sql);
              $query->execute([$nom]);;
               
               $dbh = null;
           
		?>
	</body>
</html>