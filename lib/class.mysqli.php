<?PHP
// Dommert Enterprises Inc.
// MySQLi Library
// (C) 2014 
// DommertEnterprises@Gmail.com
// ===============================

class Database
{
   	
	public function __construct($host,$username,$password,$db_name)
	{
		$this->mysqli = new mysqli($host, $username, $password, $db_name);
		if(mysqli_connect_errno()) 
		{
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
		}
	 //else { echo"Your Database successfully connected \n";}
	}


  function Read($var, $query)
  {
  	global $$var, $r;
  	
    if ($result = $this->mysqli->query($query)) 
    {
      // fetch associative array 
    	unset($c); $c = 0; // Setting Counter
       while ($row = $result->fetch_assoc()) 
      {
        $data[] = $row;
        $c++; // counter
      }
    }
    $r[] = $c; // array row counter
    $$var = $data; // Assign data to new variable
    //return data;!!
    return $$var;
    return $r; 
	$result->free(); // free result set 

  }

    function WriteTest($var1 , $var2)
  {
    // create a prepared statement
    $query = "INSERT INTO test_table 
    (title,data) VALUES (?,?)";
    
    if ($stmt = $this->mysqli->prepare($query)) 
    {
    
	    $stmt->bind_param("ss", $var1,$var2); // bind parameters for markers 
		$stmt->execute(); // execute query
	    $stmt->close(); // close statement
    }
  }

 	public function __destruct()
	{
		$this->mysqli->close();	
		//echo 'Connection Closed...<BR>';
	}

}

?>