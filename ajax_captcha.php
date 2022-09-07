<?php
session_start();
if(strtoupper($_GET['captcha']) == $_SESSION['captcha_id']){
	echo '1';
}else{
	echo '0';
}
?>