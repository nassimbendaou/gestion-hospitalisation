<html>
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
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
    
    <script>
    function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "PIN4.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
    <style>

img{
    width:20px;
    height: 20px;
}
.form-control:focus {
    border-color:#6DAFF1 !important;
    
}
button{
    border-style: none;
}
    </style>
    
	<body style="background-color:#white !important">
	
   
<input type="text" style='    width: 300px;
    border: 2px solid;
    border-color: gray; margin-bottom:40px; margin-left:100px; border-radius:15px;'class="form-control" placeholder="Search for..." onkeyup="showHint(this.value); myFunction()">
		
                <?php
                $user= 'root';
                $pass = '';
                $dbh = new PDO('mysql:host=localhost;dbname=hospital', $user, $pass);
                $sth = $dbh->query('Select * From patient');
                $c=0;
                echo "
                <div class='col-md-6 col-4 align-self-center' style='float:right;'>
              <a href='AjouteC.html' class='btn pull-right hidden-sm-down btn-success' style='float:right;'>Ajouter un patient</a>
          </div>
                <div id='myDIV' style='float:left;'>
                <table class='table'>
                		<thead>
                <tr>
			        <th scope='col'>CIN</th>
			        <th scope='col'>Nom</th>
                    <th scope='col'>Date de naissance</th>
                    <th scope='col'>Adresse</th>
			    </tr>
            </thead>
            

            <tbody>";  
            

                  while($row = $sth->fetch(PDO::FETCH_ASSOC)){   //Creates a loop to loop through results
              echo "<tr><td >" . $row['CIN'] . "</td><td id='nom".$c."' class='". $row['Nom'] ."'>" . $row['Nom'] . "</td><td id='date".$c."' 
              class='". $row['daten'] ."'>". $row['daten'] ."</td>
              <td id='adr".$c."' class='". $row['Adresse'] ."'>". $row['Adresse'] ."</td>
              <td style='    width: 86px;'>
              <button value='". $row['CIN'] ."' style='height:27px;width:30px;background-color:white  
               ;border-radius: 50%;' onclick='redirection(this.value,".$c.")' ><i class='far fa-edit m-r-10' 
               aria-hidden='true'></i></button><button value='". $row['CIN'] ."'
                style='height:27px;width:30px;background-color:white ;border-radius: 50%;' 
                onclick='redirect(this.value)'><i class='fas fa-user-minus m-r-10' aria-hidden='true'></i></button></td></tr>"; //$row['index'] the index here is a field name
$c++;            }
             
              
              echo "</tbody></table></div>"; //Close the table in HTML
              echo"<script src='https://kit.fontawesome.com/b99e1d1383.js'></script>";
                
                $sth=NULL;
                 $dbh=NULL;  
            ?>
            <p> <span id="txtHint"></span></p>
            <script>
function redirection(str,c) {
    var date=document.getElementById('date'+c).className;
  var nom=document.getElementById('nom'+c).className;
  var adr=document.getElementById('adr'+c).className;
  
  location.replace("edit.php?q="+str+"&date="+date+"&nom="+nom+"&adr="+adr)
}
</script>
			<script>
    function myFunction() {
      var x = document.getElementById("myDIV");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
    </script>
    <script>
        function redirect(str){
            
            location.replace("suppati.php?q=" + str)
        }
    </script>
     <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Flot Charts JavaScript -->
    <script src="../../assets/plugins/flot/jquery.flot.js"></script>
    <script src="../../assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="../js/flot-data.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
		
	</body>
</html>