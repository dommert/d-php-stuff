<?PHP
// Main Libraries 
// 

/**
* 
*/
class MainClass
{
	
	function __construct()
	{
		# code...
	}

	// Dommert Enterprises Inc. 
// Global Functions

	function require_login()
	{
		if(!isset($_SESSION['logon']))
		{
			$_SESSION['redirect_to'] = $_SERVER['REQUEST_URI'];
			header("Location: $url/login");
			exit;
		}
	}





	function limit_text($text, $limit) 
	{
		unset($GLOBALS['text']);
		global $text;
		if (str_word_count($text, 0) > $limit) 
		{
	        $words = str_word_count($text, 2);
	        $pos = array_keys($words);
	        $text = substr($text, 0, $pos[$limit]) . '.....';
		}
		
	    return $text;
	}



	// Dommert Enterprises ID Generator
  /* [moved to datbase library]
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
	*/

// ===============================
}
?>
