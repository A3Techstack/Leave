
<?php
	
	session_Start();
	
	//Programming Naming Convention Standard = Camel Case 
	//-----------------------------
	
	//Class Name Standard = UpperCamelCase
	//Methods/Functions Name Standard = lowerCamelCase
	//Variables Name Standard = lowerCamelCase
	//---------------------------------------------------------------
	class Connection
	{
		
		var $con;
		
		function dbConnection()
		{
			$host = "localhost";
			$userName = "root";
			$password = "";
			$con = mysqli_connect($host, $userName, $password);
			
			if (!$con)
            {
                die('Could not connect: ' . mysqli_error());
            }
			
			mysqli_select_db($con, "leaveapp");
			$this->con=$con;
		}
		
		function dbCloseConnection()
		{	 
			mysqli_close($this->con);
		}
		
	}
	
?>