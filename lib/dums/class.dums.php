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
		$GLOBALS['adduser'] = 1;
		IF (isset($_POST['submit']) AND isset($_POST['email']))
		// IF Submited Form Data & Email set
		{	
			// --- Form Data
			$email = $_POST['email'];
			$password = $_POST['password'];
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$group = 'user';
			//------END
			
			IF ($result = parent::query("SELECT email FROM user WHERE email = '$email'"))
			// Checking Unique Email
			{
		     	$rows = $result->num_rows;
				IF ($rows < 1) // Checking Unique Email
				{ 
					// WRITE to Database
				$sql = "INSERT INTO user (email, fname, lname) VALUES (?,?,?)";
					$this->write($sql, array("sss", "$email", "$fname", "$lname"));

					IF (!isset($_SESSION['admin'])) 
					// Not Admin User
					{
						// Write Session Data
						$_SESSION['email'] = $_POST['email'];
						$_SESSION['fname'] = $_POST['fname'];
						$_SESSION['rid_user'] = $this->insert_id;
					}
					
					$UID = $this->id_gen(6); // Generate UserID
					$rz = $this->numrows("SELECT * FROM users WHERE uid = '$UID'");
					
					// Check if UID unique
					WHILE ($rz > 0)
					{				
						unset($UID); 
						$UID = $this->id_gen(6); 
						echo ">";
					}
					 // WRITE UID
						$em = $_SESSION['rid_user'];
						$sql2 = "UPDATE user set uid=? WHERE rid_user=?";
						$this->write($sql2, array("ss", "$UID", "$em")); 
					
					// Hash the Login/Password
					$login = hash('sha256','$GLOBALS[salt].$_SESSION[email]');
					$passwd = hash('sha256','$GLOBALS[salt].$_POST[password]');
					// Write to the Login Table
					$this->write("INSERT INTO login (login,passwd,status,uid) VALUES (?,?,?,?)",
						array("ssis","$login","$passwd","1","$UID"));
					
					include $GLOBALS['content'].'/dums/adduser_done.php';

				}
				ELSE 
				{ 
					$page['parent'] = 1;
					$_POST['usererror'] = "Email Already Exists! Try Again...";
					include $GLOBALS['dir'].'/themes/dums/form_adduser.php';
				// include form with error
				}
				
			}
			ELSE { echo "ERROR Database Connection! <BR>";}
	 		
	   }
	   ELSE 
		{ 
			// Load Form
			$page['parent'] = 1;
			//$_POST['usererror'] = "Email Already Exists! Try Again...";
			include $GLOBALS['dir'].'/themes/dums/form_adduser.php';	
	    }
	}


	function edituser()
	{

	}

	function updateuser()
	{
		
	}

	function login($attempts)
	{
		if (!isset($_POST['attempt'])) { $_POST['attempt']='1'; }
		IF ($_POST['attempt'] < $attempts)
		{
			// Check Login
			// if row = 1
				// Success , Set Session
			// ELSE
				// error:wrong login info  
			$_POST['attempt']++;
		}
		ELSE 
		{ 
			echo "ACCESS DENIED";
		}
		
	}

	 	function __destruct()
	{
		parent::close();	
		//echo 'Connection Closed...<BR>';
	}
}

?>
