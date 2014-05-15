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

		function logout()
	{
		session_start();
		session_unset();
		session_destroy();
		header("Location: $GLOBALS[url]");
		exit();
	}	

	function error($msg)
	{
		echo '
		<BR>
		<div class="row">
		<div class="large-6 small-6 large-centered small-centered columns">
		<div data-alert="" class="alert-box alert round">
		ERROR: ' . $msg . '
		<a href="" class="close">×</a>
	    </div>
	    </div>
	  	</div>';
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
