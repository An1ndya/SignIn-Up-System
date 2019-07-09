<?php

$host="localhost";
$user="root";
$password="1234";
$db="login";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($POST['signin']))
{
	$email=$_POST['mail'];
    $password=$_POST['pass1'];
    
    $sql="select * from EmailList where Email='".$email."'AND Password='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully signed in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        

}

?>
