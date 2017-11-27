<?php 
$server = "localhost"; 
$username = "ucymxbzr_estefi"; 
$password = "maimo!123";
$database = "ucymxbzr_movivet"; 
$con = mysql_connect($server, $username, $password) or die ("No se conecto: " . mysql_error()); mysql_select_db($database, $con); 

$lID = $_POST["lid"]; 
$email = mysql_real_escape_string($_POST["email"]); 
$comment = mysql_real_escape_string($_POST["comentario"]); 
$sql = "INSERT INTO comentarios (comentarios_id, email, comment) ";
 $sql .= "VALUES ($lID, '$email', '$comment')"; 
 
 if (!mysql_query($sql, $con)) {  die('Error: ' . mysql_error()); } else {    echo "Comentario agregado"; } mysql_close($con); 
?>