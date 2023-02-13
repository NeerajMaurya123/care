<?php
session_start();
session_unset(); 
session_destroy(); 

//echo "SESSIONS: ". $_SESSION['mobile'];
//echo session_status();

header("Location: login.html");
?>
