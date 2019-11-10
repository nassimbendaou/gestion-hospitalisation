<html>
	<head>
    <link href="css.css" rel="stylesheet" type="text/css">
    </head>
    <style>

/* Paramètres pour la totalité du tableau */
table {
	width: 702px;
	border-collapse: collapse ;
}

/* Paramètres pour les cellules classiques ET les cellules d'en-tête */
table th, table td {
	border: 1px solid #1048ff ;	
	padding: 5px ;
}

/* Paramètres pour les lignes d'en-tête uniquement */
table thead tr {
	background-color: #1048ff ;
	color: #ffffff ; 
}

/* Paramètres pour les lignes de contenu */
table tbody tr {
	background-color: #f2ecfe ;
}

/* Paramètres pour les lignes de contenu paires */
table tbody tr:nth-child(2n) { 
	background-color: #f9f6ff ;
}

/* Paramètres pour les lignes de contenu au survol de la souris */
table tbody tr:hover { 
	background-color: #001fa9 ;
	color: #ffffff ; 
}
    </style>
	<body style="background-color:#white !important">
	
		
		
                <?php
                $user= 'root';
                $pass = '';
                $dbh = new PDO('mysql:host=localhost;dbname=hospital', $user, $pass);
                $sth = $dbh->query('Select * From patient');
                echo "<table >
                		<thead>
				<tr>
			        <th>CIN</th>
			        <th>Name</th>
                    <th>Birthday</th>
                    <th>Adresse</th>
			    </tr>
            </thead>
            <tbody>";  
                  while($row = $sth->fetch(PDO::FETCH_ASSOC)){   //Creates a loop to loop through results
              echo "<tr><td value=". $row['CIN'] .">" . $row['CIN'] . "</td><td>" . $row['Nom'] . "</td><td>". $row['daten'] ."</td><td>". $row['Adresse'] ."</td><td style='    width: 86px;'><button  style='height:27px;width:30px;background-color:#B2B5D1   ;border-radius: 50%;' onclick='redirection()' ><i class='far fa-edit m-r-10' aria-hidden='true'></i></button><button value='". $row['CIN'] ."' style='height:27px;width:30px;background-color:#B2B5D1 ;border-radius: 50%;' onclick='redirect(this.value)'><i class='fas fa-user-minus m-r-10' aria-hidden='true'></i></button></td></tr>"; ;  //$row['index'] the index here is a field name
              }
             
              
              echo "</tbody></table>"; //Close the table in HTML
                
                $sth=NULL;
                 $dbh=NULL;  
            ?>
			
			
		
	</body>
</html>