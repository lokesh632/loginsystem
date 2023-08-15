<?php
class allclass
{
    function selectfun($table1 = NULL, $var = NULL)
    {
        include("database/connection.php");   
        $sql = " SELECT  * FROM " . $table1 . " WHERE ";
        if ($var != NULL) {
            $sql .= $var;
        } else {
            $sql .= 1;
        }
        $sqlconn = mysqli_query($conn, $sql);
        return $sqlconn;
    }
    function insertfunction($table1 = null, $val = null)
    {
        include("database/connection.php");
        $sql = "INSERT INTO $table1";
        if ($val != null) {
            $sql .= $val;
        } else {
            $sql .= 1;
        }
        $sqlconn = mysqli_query($conn, $sql);
        return $sqlconn;
    }
}
$obj = new allclass();

?>