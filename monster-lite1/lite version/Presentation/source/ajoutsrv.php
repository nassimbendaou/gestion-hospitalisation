
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
  }</style>
	<body style='background-color:white !important'>
	<?php
echo"<div style='float:right;'>
<button onclick='redirect()' class='btn'><i class='fa fa-close'></i></button></div>

		<table>
			<form action='../../Metie/trai4.php' method='post' >
			
			
			<tr>
					<td style='color:rgb(83, 80, 80)'>Nom : </td>
					<td><input type='t' name='nom'></td>
            </tr>
            
			
			<tr>
				<td></td><td><input type='submit' value='submit'><input type='reset' value='sup'></td>
			</tr>
			<tr style='display:none'>
				<td><input name='type' value='12'></td>
			</tr>
			</form>
		</table>
		"?>
		 <script>
        function redirect(str){
            
            location.replace("SRV3.php")
        }
    </script>
	</body>
</html>