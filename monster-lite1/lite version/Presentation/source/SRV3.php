<html style='overflow:hidden;'>
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
   
    <style>
        
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  /* Fallback color */
  background-color: rgba(255,0,0,0) !important; /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: rgba(255,0,0,0.3) !important;
  margin: auto;
  padding: 20px;
  border: 1px solid red;
  width: 80%;
  border-radius:25px;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
button{
    border-style: none;
}
img{
    width:20px;
    height: 20px;
}
.form-control:focus {
    border-color:#6DAFF1 !important;
    
}
.trash:hover{
    color:red !important;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
    </style>
    <script>
        
    function calculer1(service,nbr)
    {

      
      //alert(nbr);
      var request=new XMLHttpRequest();
        request.open("GET", "suppservice.php?q="+nbr, true);
    
      var f=new FormData();
        f.append("service"+nbr,service+nbr);
      request.onreadystatechange=function()
      {
      if(request.readyState==4 && request.status==200)
          {
            document.getElementById("res").innerHTML=request.responseText;
          
          }
      }
      request.send(f);
    
    }</script>
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
        xmlhttp.open("GET", "SRV4.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
	<body style="background-color:#white !important">
	
   
<input type="text" style='    width: 300px;
    border: 2px solid;
    border-color: gray; margin-bottom:40px; margin-left:100px; border-radius:15px;'class="form-control" placeholder="Search for..." onkeyup="showHint(this.value); myFunction()">
			
                <?php
                
                $user= 'root';
                $pass = '';
                $dbh = new PDO('mysql:host=localhost;dbname=hospital', $user, $pass);
                $sth = $dbh->query('Select * From service');
                $c=0;
                echo"<div id='res'></div>";
                echo "
                <div  class='col-md-6 col-4 align-self-center' style='float:right;'>
                <a onclick='rdtl()' class='btn pull-right hidden-sm-down btn-success' style='float:right; color:white;'>Ajouter un service</a>
            </div>
                <div id='myDIV'>
                <table class='table' >
                		<thead>
				<tr>
			        <th scope='col'>serviceID</th>
			        <th scope='col'>Nom</th>
                    
			    </tr>
            </thead>
            <tbody>";  
                  while($row = $sth->fetch(PDO::FETCH_ASSOC)){   //Creates a loop to loop through results
              echo "<tr><td > " . $row['serviceID'] . "</td><td >" . $row['Nom'] ."</td>
              <td style='width:30px'><button  style='height:27px;width:30px;background-color:white  
               ;border-radius: 50%;' value='". $row['Nom'] ."' onclick='redirect(this.value)' >
               <i class='far fa-plus-square m-r-10' aria-hidden='true'></i></button></td><td>
               <button  name='".$row['Nom']."' value='". $row['serviceID'] ."'
               style='height:27px;width:30px;background-color:white ;border-radius: 50%;' 
               onclick='calculer1(this.value,this.name)'><i id='tr' style='color:black;'  class='fas fa-trash m-r-10 trash' aria-hidden='true'></i></button></td></tr>"; //$row['index'] the index here is a field name
              $c++;
            }
             
             $c=$c+4;
              echo "</tbody></table></div></div>
              
              <p> <span id='txtHint'></span></p>
              <script>function rdtl(){
              
              location.replace('ajoutsrv.php?q='+".$c.")
          }</script>
              "; //Close the table in HTML
              
              
                
                $sth=NULL;
                 $dbh=NULL;  
            ?>
          
            <script src='https://kit.fontawesome.com/b99e1d1383.js'></script>
            
            <script>
function redirection() {
  location.replace("edit.html")
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
            
            location.replace("../../metie/traitement5.php?q=" + str)
        }
    </script>
      <script>
        function redir(str){
            
            location.replace("suppservice.php?q=" + str)
        }
    </script>
    <script>
        function rdt(){
            
            location.replace("../../metie/traitement5.php?q=" + str)
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