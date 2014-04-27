<?PHP 
include($lib_mysqli);

CLASS Test
{

  function __construct()
  {

  }

  function Close()
  {
    global $mysqli;
    return $mysqli->close();
  }

  function Read($query)
  {
    global $mysqli, $rows;
    //$query = "SELECT * FROM test_table";
    if ($result = $mysqli->query($query)) 
    {
      // fetch associative array 
       while ($row = $result->fetch_assoc()) 
      {
        $rows[] = $row;
      }
    }
    
    //print_r($rows);
    return $rows; // Return your data!
    // free result set 
    $result->free();
  }

  function Write($val1,$val2)
  {
    global $mysqli;
    // create a prepared statement
    $query = "INSERT INTO test_table (title,data) VALUES (?,?)";
    if ($stmt = $mysqli->prepare($query)) 
    {
    // bind parameters for markers 
    $stmt->bind_param("ss", $val1,$val2);
    // execute query
    $stmt->execute();
    // close statement
    $stmt->close();
    }
  }

}


?>