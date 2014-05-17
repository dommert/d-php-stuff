<?PHP
// Dommert Enterprises Inc
// (c) 2014 
// Daddee Library
// 

Class Daddee extends dums
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
  
	function files()
	{

	}

	function objects()
	{

	}

	function links()
	{

	}
}

