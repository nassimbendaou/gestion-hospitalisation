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


img{
    width:20px;
    height: 20px;
}
    </style>
    <body>
<?php
// Array with names


                $user= 'root';
                $pass = '';
                $dbh = new PDO('mysql:host=localhost;dbname=hospital', $user, $pass);
                $sth = $dbh->query('Select * From medecin');
                 
               $i=0;
                  while($row = $sth->fetch(PDO::FETCH_ASSOC)){   //Creates a loop to loop through results
               $a[]=$row['nom'];
               $b[]=$row['medecinID'];
               $c[]=$row['serviceID'];
               
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
                $hint =  "<tr><td value=". $b[$f] .">" . $b[$f]  . "</td><td>" . $name . "</td><td>". $c[$f] ."</td><td style='    width: 86px;'><button  style='height:27px;width:30px;background-color:white   ;border-radius: 50%;' onclick='redirection()' ><i class='far fa-edit m-r-10' aria-hidden='true'></i></button><button value='". $b[$f] ."' style='height:27px;width:30px;background-color:white ;border-radius: 50%;' onclick='redirect(this.value)'><i class='fas fa-user-minus m-r-10' aria-hidden='true'></i></button></td></tr>"; 
            } else {
                $hint .= "<tr><td value=". $b[$f] .">" . $b[$f]  . "</td><td>" . $name . "</td><td>". $c[$f] ."</td><td style='    width: 86px;'><button  style='height:27px;width:30px;background-color:white   ;border-radius: 50%;' onclick='redirection()' ><i class='far fa-edit m-r-10' aria-hidden='true'></i></button><button value='". $b[$f] ."' style='height:27px;width:30px;background-color:white ;border-radius: 50%;' onclick='redirect(this.value)'><i class='fas fa-user-minus m-r-10' aria-hidden='true'></i></button></td></tr>"; 
            }
        }
        $f++;
    }
}

for ($x = 0; $x < $i; $x++){
    if ($table === "") {
        $table = "<tr><td value=". $b[$x] .">" . $b[$x]  . "</td><td>" . $a[$x] . "</td><td>". $c[$x] ."</td><td style='    width: 86px;'><button  style='height:27px;width:30px;background-color:white   ;border-radius: 50%;' onclick='redirection()' ><i class='far fa-edit m-r-10' aria-hidden='true'></i></button><button value='". $b[$x] ."' style='height:27px;width:30px;background-color:white ;border-radius: 50%;' onclick='redirect(this.value)'><i class='fas fa-user-minus m-r-10' aria-hidden='true'></i></button></td></tr>"; 
    } else {
        $table .= "<tr><td value=". $b[$x] .">" . $b[$x]  . "</td><td>" . $a[$x] . "</td><td>". $c[$x] ."</td><td style='    width: 86px;'><button  style='height:27px;width:30px;background-color:white   ;border-radius: 50%;' onclick='redirection()' ><i class='far fa-edit m-r-10' aria-hidden='true'></i></button><button value='". $b[$x] ."' style='height:27px;width:30px;background-color:white ;border-radius: 50%;' onclick='redirect(this.value)'><i class='fas fa-user-minus m-r-10' aria-hidden='true'></i></button></td></tr>";
    }
}


// Output "no suggestion" if no hint was found or output correct values 
echo "<table class='table'>
<thead>
<tr>
<th scope='col'>ID Medecin</th>
<th scope='col'>Nom</th>
<th scope='col'>Service</th>

</tr>
</thead>
<tbody>";
echo $hint === "" ? $table: $hint;
echo "</tbody></table>";
echo" <script src='font.js'></script>
<script>
function redirection() {
location.replace('edit2.html')
}
</script>

<script>
function redirect(str){

location.replace('sipmed.php?q=' + str);
}
</script>";

?>

    </body>
    </html>