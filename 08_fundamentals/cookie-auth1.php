<?php
$secret_word = 'if i ate spinach';
if (validate($_POST['username'],$_POST['password'])) {
    setcookie('login',  $_POST['username'].','.md5($_POST['username'].$secret_word));
}
function validate($user, $pass) {
	
/* replace with appropriate username and password checking,
such as checking a database */
$users = array('david' => 'david','adam' => 'adam');
if (isset($users[$user]) && ($users[$pass] == $pass)) {
	return true;
} else {
	return false;
}
}