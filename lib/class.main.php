<?PHP
// Main Libraries 
// Dommert Enterprises Inc. 
// Global Functions

class MainClass
{
	
	function __construct()
	{
		# code...
	}



	function require_login()
	{
		// Give me tokken or go login!!
		if(!$_SESSION['logon'])
		{
			$_SESSION['redirect_to'] = $_SERVER['REQUEST_URI'];
			header("Location: $url/login");
			exit;
		}
	}





	function limit_text($text, $limit) 
	{
		// Limit Text.....
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
	

	function datetimestamp()
	{
		// Generic Date Time Stamp [2014-01-30 20:00:01]
	$date = new DateTime();
	return $date->format('Y-m-d H:i:s');
	}


// ===============================
}
?>
