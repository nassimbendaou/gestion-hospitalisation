<html>
	<head>
  <meta http-equiv="Refresh" content="0.3;url=../Presentation/source/PIN3.php">
	</head>
	<body>
		<?php
			       $user= 'root';
             $pass = '';
             $adresse=$_POST['adresse'];
             $cin=$_POST['CIN'];
             $date=$_POST['date'];
             $nom=$_POST['nom'];
             $pdo = new PDO('mysql:host=localhost;dbname=hospital', $user, $pass);
             $sql = "UPDATE patient SET nom=?, daten=?, Adresse=? WHERE CIN=?";
              $stmt= $pdo->prepare($sql);
              $stmt->execute([$nom, $date, $adresse, $cin]);
             
         
		
		?>
	</body>
</html>