<?PHP
// Dommert Enterprises Inc.
// MySQLi Library
// (C) 2014 
// DommertEnterprises@Gmail.com
// ===============================


class Database extends mysqli
{
   	
  public function __construct($host,$username,$password,$db_name)
  {
    parent::__construct($host, $username, $password, $db_name);
    if(mysqli_connect_errno()) 
    {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    }
  }

  function Read($query)
  {
    unset($GLOBALS['data']);
    global $data, $r ;
    

    if ($result = parent::query($query)) 

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
    //$$var = $data; // Assign data to new variable
    //return data;!!
    return $data;
    return $r; 
  $result->free(); // free result set 

  }

  function ReadVar($var, $query)
  {
  	global $$var, $r;
  	

    if ($result = parent::query($query)) 

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
    

    if ($stmt = parent::prepare($query)) 
{
    
	    $stmt->bind_param("ss", $var1,$var2); // bind parameters for markers 
		$stmt->execute(); // execute query
	    $stmt->close(); // close statement
    }
  }


  function NumRows($sql)
  {

  if ($result = parent::query($sql))
    {
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows($result);
    return $rowcount;    
    mysqli_free_result($result);
    }
  }

 	public function __destruct()
	{
		parent::close();	

		//echo 'Connection Closed...<BR>';
	}

}

?>