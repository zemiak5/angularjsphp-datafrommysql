<?php
include("../php/mysqlconnection.php"); /*include file which contains details for connection to database */
?>
<?php
    $postdata = file_get_contents("php://input"); /* MUST BE ALWAYS SAME. To get JSON request from AngularJS via http */
    $request = json_decode($postdata); /* MUST BE ALWAYS SAME. decode received JSON request data into JSON object*/
    $menotab = $request->menotabulecky; /* AngularJS will send JSON request and will send table name in variable menotabulecky */
    $msg = $menotab; /* table name sent from AngularJS*/

    /* connect to MySQL using login details stored in included file mysqlconnection.php */
    $conn = new mysqli($db_address, $db_username, $db_password, $db_databasename);
        $outp = array(); /* declare empty array we will use to buil JSON string and return to AngularJS controller */
        $result = $conn->query("SELECT * FROM ".$msg); /* send request to MySQL database */
        
        while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
            /* go through each returned row from table in database */
            $outp[] = $rs; /* add row from database table into array we will output */
        }
        $out = json_encode($outp); /* we will encode /make Sting/ from array of results */
        
        echo($out); /* we will output JSON in String format */
?>