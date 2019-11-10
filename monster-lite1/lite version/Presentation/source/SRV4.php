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
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
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
    <body>
<?php
// Array with names


                $user= 'root';
                $pass = '';
                $dbh = new PDO('mysql:host=localhost;dbname=hospital', $user, $pass);
                $sth = $dbh->query('Select * From service');
                 
               $i=0;
                  while($row = $sth->fetch(PDO::FETCH_ASSOC)){   //Creates a loop to loop through results
               $a[]=$row['Nom'];
            
               $b[]=$row['serviceID'];
               
               $i++;
              }
             

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";
$table = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    $f=0;
    foreach($a as $name) {
       
        if (stristr($q, substr($name, 0, $len))) {
           
            if ($hint === "") {
                $hint =  "<tr><td value=". $b[$f] .">" . $b[$f]  . "</td><td>" . $name . "</td><td  style='width:30px'><button  style='height:27px;width:30px;background-color:white  ;border-radius: 50%;' value='". $a[$f] ."' onclick='redirect(this.value)' ><i class='far fa-plus-square m-r-10' aria-hidden='true'></i></button></td><td>
                <button  name='".$row['Nom']."' value='". $row['serviceID'] ."'
                style='height:27px;width:30px;background-color:white ;border-radius: 50%;' 
                onclick='calculer1(this.value,this.name)'><i id='tr' style='color:black;'  class='fas fa-trash m-r-10 trash' aria-hidden='true'></i></button></td></tr>"; 
            } else {
                $hint .= "<tr><td value=". $b[$f] .">" . $b[$f]  . "</td><td>" . $name . "</td><td style='width:30px'><button  style='height:27px;width:30px;background-color:white   ;border-radius: 50%;' value='". $a[$f] ."' onclick='redirect(this.value)' ><i class='far fa-plus-square m-r-10' aria-hidden='true'></i></button></td><td>
                <button  name='".$a[$f]."' value='". $b[$f] ."'
                style='height:27px;width:30px;background-color:white ;border-radius: 50%;' 
                onclick='calculer1(this.value,this.name)'><i id='tr' style='color:black;'  class='fas fa-trash m-r-10 trash' aria-hidden='true'></i></button></td></tr>"; 
            }
        }
        $f++;
    }
}

for ($x = 0; $x < $i; $x++){
    if ($table === "") {
        $table = "<tr><td value=". $b[$x] .">" . $b[$x]  . "</td><td>" . $a[$x] . "</td><td style='width:30px'><button  style='height:27px;width:30px;background-color:white   ;border-radius: 50%;' value='". $a[$x] ."' onclick='redirect(this.value)' ><i class='far fa-plus-square m-r-10' aria-hidden='true'></i></button></td><td>
        <button  name='".$a[$x]."' value='". $b[$x] ."'
        style='height:27px;width:30px;background-color:white ;border-radius: 50%;' 
        onclick='calculer1(this.value,this.name)'><i id='tr' style='color:black;'  class='fas fa-trash m-r-10 trash' aria-hidden='true'></i></button></td></tr>"; 
    } else {
        $table .= "<tr><td value=". $b[$x] .">" . $b[$x]  . "</td><td>" . $a[$x] . "</td><td style='width:30px'><button  style='height:27px;width:30px;background-color:white   ;border-radius: 50%;' value='". $a[$x] ."' onclick='redirect(this.value)' ><i class='far fa-plus-square m-r-10' aria-hidden='true'></i></button></td><td>
        <button  name='".$a[$x]."' value='". $b[$x] ."'
        style='height:27px;width:30px;background-color:white ;border-radius: 50%;' 
        onclick='calculer1(this.value,this.name)'><i id='tr' style='color:black;'  class='fas fa-trash m-r-10 trash' aria-hidden='true'></i></button></td></tr>";
    }
}


// Output "no suggestion" if no hint was found or output correct values 
echo "
<table class='table' >
        <thead>
<tr>
    <th scope='col'>serviceID</th>
    <th scope='col'>Nom</th>
    
</tr>
</thead>
<tbody>";
echo $hint === "" ? $table: $hint;
echo "</tbody></table>";
echo"<script src='font.js'></script>
";

?>
<script>
function redirection() {
  location.replace("edit.html")
}
</script>
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