<?php
// Database settings
$dbname="mydb";
$dbhost="192.168.1.45";
$dbport=3306;
$dbuser="jarvis";
$dbpasswd="root";
$db=null;

try{
    $db = new mysqli($dbhost.":".$dbport, $dbuser, $dbpasswd, $dbname);
}catch (Exception $e) {
    echo 'Ex: ', $e->getMessage(), "\n";
}

if($stmt = $db->prepare("SELECT * FROM mytable")) {
    $stmt->execute();
    $stmt->bind_result($res);
    $stmt->fetch();
    echo $res;

}

?>