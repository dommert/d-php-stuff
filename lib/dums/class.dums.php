<?
/*
Class Module - DUMS
Dommert User Management System

 needs DBClass
*/

Class Dums extends mysqli 
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
				IF ($rows < 1)
				{ echo " TRUE "; }
				ELSE 
				{ echo " FALSE ";} 

							// include form with error 
						// ELSE write email, get rid
						  //set session email

					// UID = genID
					  // count_rows uid = table.uid
						// WHILE count_row < 0 
								// unset uid, genid
						// ELSE write UID user.uid
						// Write login info hash()
					//set session ID
		    	  // echo thank you! & email
			}	
			ELSE { echo "ERROR DB";}
	 		
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
