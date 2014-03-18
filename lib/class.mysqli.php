<?PHP

class Database
{
	public $mysqli;
	public $data;
	
	public function __construct($host,$username,$password,$db_name)
	{
		$this->mysqli = new mysqli($host, $username, $password, $db_name);
		if(mysqli_connect_errno()) 
		{
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
		}
	// else { echo"Your Database successfully connected";}*/
	}

}

?>