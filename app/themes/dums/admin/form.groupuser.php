<div id="addgroup" class="medium-8 columns">
<h5>Add User to Group</h5>
<?PHP 
	$dums = new Dums($db_host, $db_user, $db_passwd, $db_name);
	$users = $dums->read("SELECT * FROM user ORDER BY email ASC");


	IF (isset($_POST['submit']) && $_SESSION['admin'] == '1')
	{
		// Form Data 
		 $userid = $_POST['userid'];
		 $groupid = $_GET['id'];
		$input = $dums->write("INSERT INTO groupies (uid,gid) VALUES (?,?)", 
			array("ss","$userid", "$groupid"));
	}
?>
	<form method="POST">
      <label>Select User
        <select name="userid">
        <option> Add User </option>
        <?PHP 
        foreach($users as $u)
        {
          	echo '<option value="' . $u['uid'] . '">' . $u['email'] . '</option>';
      	}
        ?>
        </select>

      </label>
      <button name="submit" value="submit">Submit</button>
    </form>


</div>
<div class="medium-4 columns">
	<h5> Users in Group </h5>

		<ul>
		     <?PHP 
		$gid = $_GET['id'];
		$list = $dums->read("SELECT g.gid, u.uid, u.email
FROM groupies g
INNER JOIN user u ON (g.uid = u.uid)
WHERE g.gid = '$gid'");

//     print_r($list);    
        foreach($list as $u)
        {
          	 echo '<LI> '.$u['email']. '</li>';
      	}
        ?>

		</ul>
</div>