<?php

$$host="localhost";
$user="root";
$password="1234";
$db="login";

mysql_connect($host,$user,$password);
mysql_select_db($db);
 
	if(isset($_POST['signup'])){ // Fetching variables of the form
		$firstname = $_POST['firstname'];
		$lastname=$_POST['lastname']
		$email = $_POST['mail2'];
		$password = $_POST['pass2'];
	
		$query = mysql_query("insert into EmailList(Firstname, Lastname, Email, Password) values ('$firstname','$lastname' ,'$email', '$password')");
		
		if ($query==true)
		{
			echo " You Have Successfully signed up";
		}
		else{
			echo "" You Have not signed up"";
		}
}

?>