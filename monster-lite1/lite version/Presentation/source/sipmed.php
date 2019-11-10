<html>
	<head>
    <meta http-equiv="Refresh" content="0.3;url=RIB3.php">
    
	</head>
	<body>
        <?php
        
        $user= 'root';
        $pass = '';
        $dbh = new PDO('mysql:host=localhost;dbname=hospital', $user, $pass);
        
        $q = $_REQUEST["q"];
            $query = 'Delete  FROM medecin Where medecinID = ?';
            $req = $dbh->prepare($query);
            $req->execute([$q]);
           
            
            
		?>
	</body>
</html>