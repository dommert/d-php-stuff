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

	function add_object()
	{
		IF (isset($_POST['submit']) && $_GET['type'] == 'add')
		{
			// Form Data
			$name = $_POST['name'];
			$title = $_POST['title'];
			$description = $_POST['description'];
			$info = $_POST['info'];

			$sql = "INSERT INTO object (name,title,description,info) VALUES (?,?,?,?)";
			$this->Write($sql,array("ssss", "$name","$title","$description","$info"));
			Echo '<p class="panel medium-6 columns medium-centered"> Thanks! Data has been saved. </P>';
		}
		ELSE
		{
			include $GLOBALS['content'].'/object/form.object.php';
		}
	}

	function view_object()
	{

	}

	function list_object()
	{
		
	}

	function links()
	{

	}
}

