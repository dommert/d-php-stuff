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

	function id_gen($id_length) 
	{
		// Allowed Characters
		unset($GLOBALS['string']);
		global $string;
		
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ-_abcdefghijklmnopqrstuvwxyz0123456789';
		
			for ($i = 0; $i < $id_length; $i++) 
			{
				$string .= $characters[rand(0, strlen($characters) - 1)];
			}

		return $string;
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
					// write email, get rid
					// $insert->insert_id;

					//set session email 
					// UID = genID
					// count_rows uid = table.uid
					// WHILE count_row > 0 
							// unset uid, genid
						// ELSE write UID user.uid
						// Write login info hash()
					//set session ID
		    	  // echo thank you! & email
					echo "<BR>" . $this->id_gen(4);


				}
				ELSE 
				{ 
					echo " FALSE - load form";// include form with error
				} 
			}	
			ELSE { echo "ERROR Database Connection! <BR>";}
	 		
	   }
	   ELSE 
	   {
	   		echo 'Load Form';
	   }
	}

	function edituser()
	{

	}

	function updateuser()
	{
		
	}

	function login()
	{

	}

	 	function __destruct()
	{
		parent::close();	

		//echo 'Connection Closed...<BR>';
	}
}

?>
