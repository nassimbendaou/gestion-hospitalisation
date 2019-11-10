<html>
	<head>
    <meta http-equiv="Refresh" content="0.3;url=../Presentation/source/RIB3.php">
	</head>
	<body>
		<?php
			include '../DAObanque/DB.inc';
			$type=$_POST['type'];
			switch ($type)
			{
				case 1 :
					Newpatient($_POST['cin'], $_POST['nom'], $_POST['daten'],$_POST['adresse']);
				break;
				case 2 :
					Nouveaumedecin( $_POST['nom'], $_POST['serviceID']);
				break;
				case 3 :
				hospitalinfo($_POST['num']);
				break;
				case 4 :
				Supprime($_POST['cin']);
				break;
				case 5 :
				addhospitalition($_POST['num'],$_POST['medecinID'],$_POST['patientID']);
				break;
				case 6 :
				DisplayInfos($_POST['cin']);
				break;
				case 7 :
					Affiche($_POST['num']);
				break;
				case 8 :
					Displayinfosmedecin($_POST['idmed']);
				break;
				case 9 :
					supmed($_POST['idmed']);
				break;
				case 10 :
				modifier($_POST['cin'], $_POST['nom'], $_POST['date'],$_POST['adresse']);
				break;
				case 11 :
				mededitinfo($_POST['medecinID'],$_POST['nom'],$_POST['serviceID']);
				break;
				case 12 :
				Nouveauservice($_POST["serviceID"],$_POST["nom"]);
				break;

			}
		?>
	</body>
</html>