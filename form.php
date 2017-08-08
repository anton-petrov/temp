<pre>

<?php
/*
print_r($_POST);
echo "\n";
print_r($_SERVER['QUERY_STRING'] ?? 'empty');
echo "\n";
print_r($_REQUEST);

@ print "${_SERVER['REMOTE_ADDR']} , ${_SERVER['HTTP_USER_AGENT']} \n";

echo $_SERVER['HTTP_USER_AGENT'];


define('counter', 'counter');

$count = 0;
if (isset($_COOKIE[counter])) {
  $count = $_COOKIE[counter];
}
$count++;
setcookie(counter, $count, time() + 30);

echo "\n\nvisits: $count \n";

echo $_REQUEST['Data']['city'];

var_dump($_SERVER);
*/

print_r($GLOBALS);

?>

</pre>
