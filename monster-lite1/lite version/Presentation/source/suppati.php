<html>
	<head>
    <meta http-equiv="Refresh" content="0.3;url=PIN3.php">
    
	</head>
	<body>
        <?php
        
        $user= 'root';
        $pass = '';
        $dbh = new PDO('mysql:host=localhost;dbname=hospital', $user, $pass);
        
        $q = $_REQUEST["q"];
            $query = 'Delete  FROM patient Where CIN = ?';
            $req = $dbh->prepare($query);
            $req->execute([$q]);
           
            
            
		?>
	</body>
</html>