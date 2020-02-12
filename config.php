<?php

$con=new mysqli("localhost","root","","website");
             // server name, username,password, database name

if($con->connect_error)
{
	echo $con->connect_error;
    die("sorry database connection failed")

}
else
{
	echo "database connected"
}

?>