<?php


$host = "p:localhost";
$username = "virtualgallery";
$password = "tEgJJq4fFk25DGIh";
$database = "VirtualGallery";


global $db;

$db = new mysqli($host, $username, $password, $database);
if ($db->connect_errno > 0)
    die("Error connecting to database: " . $db->connect_error);
if (!$db->set_charset("utf8"))
    die("Error loading character set utf8: " . $db->error);
    
    
    function __escape_arg($arg)
    {
        global $db;
    
        if (!isset($_GET[$arg]))
            die("'$arg' must be provided");
    
        return "'" . $db->real_escape_string($_GET[$arg]) . "'";
    }

    function call_routine($name, $args = array())
    {
        global $db;
    
        $sql = "call $name(" . implode(", ", array_map("__escape_arg", $args)) . ");";
    
        $records = array();
    
        if ($db->multi_query($sql) !== FALSE)
        {
            do
            {
                if ($result = $db->store_result())
                {
                    while ($record = $result->fetch_assoc())
                        $records[] = $record;
                    $result->free();
                }
            } while ($db->more_results() && $db->next_result());
        }
        else
        {
            die('Failed to execute stored procedure');
        }
    
        return $records;
    }

    function get_arg($arg, $required = true) {
        if (!isset($_POST[$arg]))
            report_error("'$arg' must be provided");
    
        return $_POST[$arg];
    }
    
    function __escape_arg($arg)
    {
        global $db;
        return "'" . $db->real_escape_string($arg) . "'";
    }
    
    if (!isset($_POST["action"]))
        report_error("Argument 'action' must be provided");
    $action = $_POST["action"];
    
    if (isset($_POST["data"]))
        $data = json_decode($_POST["data"], true);
    
    
        function report_error($message) {
            die(json_encode(array("result" => "error", "message" => $message), JSON_UNESCAPED_UNICODE));
        }
        
        function report_success($data) {
            echo json_encode(array("result" => "ok", "data" => $data), JSON_UNESCAPED_UNICODE);
        }

?>