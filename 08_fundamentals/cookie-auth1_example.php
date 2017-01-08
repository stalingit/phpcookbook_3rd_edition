<?php
if (! validate($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])) {
http_response_code(401);
header('WWW-Authenticate: Basic realm="My Website"');
echo "You need to enter a valid username and password.";
exit;
}
function validate($user, $pass) {
/* replace with appropriate username and password checking,
such as checking a database */
$users = array('david' => 'fadj&32',
'adam' => '8HEj838');
if (isset($users[$user]) && ($users[$user] === $pass)) {
return true;
} else {
return false;
}
}