<?php 
$Username = filter_input(INPUT_POST, 'Username');
$passw = filter_input(INPUT_POST, 'passw');
if (!empty($Username)){
	if (!empty($passw)) {
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="emplois";
		//create connection
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if (mysqli_connect_error()) {
			die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error);
		}
		else {
			$sql = "INSERT INTO admin (id,nom ,prenom,sexe,password,login) values ('2','$Username','$passw','','','')";
			if ($conn->query($sql)){
				echo " record is inserted succesufly";
				}else
				{
					echo"error".$sql."<br>".$conn->error;
				}
				$conn->close();
		}
	}
else {
	echo "passw should not be empty";
	die();

}
}
else {
	echo "Username should not be empty";
	die();
}
?>