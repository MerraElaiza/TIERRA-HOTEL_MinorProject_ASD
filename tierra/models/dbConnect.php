<?php

    class dbConnect {
        protected $conn;
        
        function __construct() {
			$dbhost = "127.0.0.1:3306";
			$dbuser = "root";
			$dbpass = "";
			$dbname = "tierra2";

			$this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
			
			if(!$this->conn) {
				die("Could not connect: ".mysql_error());   
			} 

		
		}

		function endConnection() {
			//closes the database connection
			mysqli_close($this->conn);
		}

	}
    

?>