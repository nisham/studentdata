<?php
//include db configuration file
include_once("config.php");
$data = array(
			
			'name'=>$_POST["first_name"],
	'phone'=>$_POST["phone"],
	'email'=>$_POST["email"],
	'address'=>$_POST["address"]
		);
	 
	



	//$contentToSave="$_POST["first_name"],$_POST["phone"],$_POST["email"],$_POST["address"]";

if(isset($_POST["first_name"]) && strlen($_POST["first_name"])>0) 
{	//check $_POST["content_txt"] is not empty
  if(mysql_query("INSERT INTO studentdata(name,phone,email,address) VALUES('".$_POST["first_name"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["address"]."')"))
	{
		 //Record was successfully inserted, respond result back to index page
		 
		 // echo $contentToSave.'</li>';
		  mysql_close($connecDB); //close db connection

	}else{
		
		//header('HTTP/1.1 500 '.mysql_error()); //display sql errors.. must not output sql errors in live mode.
		header('HTTP/1.1 500 Looks like mysql error, could not insert record!');
		exit();
	}


}
?>