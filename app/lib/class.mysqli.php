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
   //else { echo"Your Database successfully connected \n";}
  }

// Basic Read from a Database
  function Read($query)
  {
    unset($GLOBALS['data']);
    global $data, $r ;
    

    if ($result = parent::query($query)) 

    {
      // fetch associative array 
      $c = FALSE;unset($c);
      $c == 0; 
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

// Read the Database with return variable name
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


    function Write($query,$params)
  {
    // create a prepared statement
    if ($stmt = parent::prepare($query)) 
    {
      $ref = new ReflectionClass("mysqli_stmt");
      $method = $ref->getMethod("bind_param");
      $method->invokeArgs($stmt, $params);
      //$stmt->bind_param($typeDef, $params); // bind parameters for markers 
		  $stmt->execute(); // execute query
	    $stmt->close(); // close statement
    }
  }

  function Prep($query,$params)
  {
    // create a prepared statement
    if ($stmt = parent::prepare($query)) 
    {
      $ref = new ReflectionClass("mysqli_stmt");
      $method = $ref->getMethod("bind_param");
      $method->invokeArgs($stmt, $params);
      //$stmt->bind_param($typeDef, $params); // bind parameters for markers 
      $stmt->execute(); // execute query
      $stmt->fetch_assoc();
      $stmt->close(); // close statement
    }
  }

// Return the number of rows on SQL statment
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

    function id_gen($id_length) 
  {
    // Allowed Characters
    unset($GLOBALS['string']);
    global $string;
    
    // allowed characters (removed A,a)
    $characters = 'EFGHIJKLMNOPQRSTUVWXYZ-bcdefghijklmnopqrstuvwxyz0123456789BCD';
    
      for ($i = 0; $i < $id_length; $i++) 
      { $string .= $characters[rand(0, strlen($characters) - 1)];    
      }
    return $string;
  }

    function unique_check($table,$cell,$idnum)
    {
      $id = $this->id_gen($idnum);
      $sql = "Select $cell FROM $table WHERE BINARY $cell = BINARY '$id'";
      $check = $this->NumRows($sql);
      $i = 0;
      IF ($check == 0)
      {
        Return $id;
      }
       ELSE Return FALSE;
      }


 	public function __destruct()
	{
		parent::close();	

		//echo 'Connection Closed...<BR>';
	}

}

?>