<html style='overflow: hidden;'>
	<head>
    <link href="css.css" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="../image/png" sizes="16x16" href="../assets/images/1.png">
    <title>Monster Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>
    
    
    <style>
button{
    border-style: none;
}

img{
    width:20px;
    height: 20px;
}
.btn {
  background-color: DodgerBlue; /* Blue background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 12px 16px; /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
    </style>
	<body>
        <?php
        
  
        $q = "'".$_REQUEST["q"]."'";
          
            $user= 'root';
                $pass = '';
                $dbh = new PDO('mysql:host=localhost;dbname=hospital', $user, $pass);
                $sth = $dbh->query("Select nom, medecinID
                From medecin
                Where serviceID=".$q.";");
            
                
            echo "
            <div style='float:right;'>
        <button onclick='redirect()' class='btn'><i class='fa fa-close'></i></button></div>
            <div id='myDIV' style='float:left;'>
            <h1 style='color:gray; font-family:Arial, Helvetica, sans-serif;'>Les medecins de service ".$q."</h1>
            
            <table class='table' action='./api/user/login.php' method='POST'>
                    <thead>
            <tr>
            <th scope='col'>Nom</th>
            <th scope='col'>medecinID</th>
            <th scope='col'>service</th>

             
                
                
                
            </tr>
        </thead>
        <tbody>
        ";
     
          
       $i=0;
        while($row = $sth->fetch(PDO::FETCH_ASSOC)){   //Creates a loop to loop through results
            echo  "<tr><td id='nom".$i."' class='".$row['nom']."'>" . $row['nom'] . "</td><td>" . $row['medecinID'] ."</td><td id='service".$i."' class='".$_REQUEST['q']."'>".$_REQUEST['q']."</td><td style='    width: 86px;'><button value='". $row['medecinID'] ."' style='height:27px;width:30px;background-color:white   ;border-radius: 50%;' onclick='redirection(this.value,".$i.")' ><i class='far fa-edit m-r-10' aria-hidden='true'></i></button><button value='". $row['medecinID'] ."' style='height:27px;width:30px;background-color:white ;border-radius: 50%;' onclick='redirecte(this.value)'><i class='fas fa-user-minus m-r-10' aria-hidden='true'></i></button></td></tr>"; //$row['index'] the index here is a field name
        $i++;
        }
       
        
        echo "</tbody></table></div>"; //Close the table in HTML
    
          
          $sth=NULL;
           $dbh=NULL;  
      ?>
      <p> <span id="txtHint"></span></p>
      <script>
function redirection(str,nbr) {
  var c=document.getElementById('nom'+nbr).className;
  var s=document.getElementById('service'+nbr).className;
location.replace("../Presentation/source/edit21.php?q="+str+"&a="+c+"&b="+s);
}
</script>
        <script src='https://kit.fontawesome.com/b99e1d1383.js'></script>
        
        <script>
        function redirect(str){
            
            location.replace("../Presentation/source/SRV3.php")
        }
    </script>
      <script>
        function redirecte(str){
            
            location.replace("sipmed.php?q=" + str)
        }
    </script>
	</body>
</html>