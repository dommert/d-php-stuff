<?
/*
Class Module - DUMS
Dommert User Management System

 needs DBClass
*/

Class Dums extends Database
{

  public function __construct($host,$username,$password,$db_name)
  {
    parent::__construct($host, $username, $password, $db_name);
    //$this->mysqli = new mysqli($host, $username, $password, $db_name);
    if(mysqli_connect_errno()) 
    {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    }
   //else { echo"Your Database successfully connected \n";}
  }



	function adduser()
	{
	echo "Add User  ". $_POST['email'] . " <BR>";
	
	IF (isset($_POST['email'])) 
		{	
		//IF (isset($_POST['submit']) AND (isset($_POST['email'])))
			$email = $_POST['email'];
			IF ($result = parent::query("SELECT email FROM test_table WHERE email = '$email'"))
			{
		     	print_r($result);
		     	$rows = $result->num_rows;
				IF ($rows < 1) // Checking Unique Email
				{ 
					echo " TRUE - create" ;
					// WRITE DB EMAIL, GET RID
					  //$this->write($sql, array("ss","test","testing344"));
					// SET SESSION INFO

					// $UID = $this->id_gen(8);
					// $rz = $this->numrows("SELECT * FROM table WHERE uid = '$UID'");
					// WHILE ($rz > 0) { 
							// unset $UID; $UID = $this->id_gen(8); }

						// ELSE { $sql1 = "INSERT"; $this->write($sql1, array("s","value")); }
						// Write login info hash('sha256','');
					//set session ID
		    	  // echo thank you! & email
					echo "<BR>";


				}
				ELSE 
				{ 
					echo " FALSE - load form
					<INPUT TYPE=text>";
				// include form with error
				}
				
			}
			ELSE { echo "ERROR Database Connection! <BR>";}
	 		
	   }
	   ELSE 
	   { echo 'Load Form';   }
	}


	function edituser()
	{

	}

	function updateuser()
	{
		
	}

	function login()
	{
		// IF (attempt < attempts)
		// {
		// Check the Database for match
		// IF (numrows == 1)
		// {
		//   THEN success
		// }
		//   ELSE 
		//	{ 
			// Success
			// Attempt
			// Form 
		//	}
		// }
	}

	 	function __destruct()
	{
		parent::close();	
		//echo 'Connection Closed...<BR>';
	}
}

?>
