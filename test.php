
<pre>
<?php
/*
$message = "Output: ";
define('anton', "petrov", true);
require_once 'friend.php';

echo call_user_func("sqr", 2);

$prnt = function ($a) use($message) {
  echo "<br>" . $message . $a . "<br>";
};

function doSomething($function, $argument) {
  $function($argument);
}

$message = "fff";
doSomething($prnt, 100000947239746);
$message = "fff";
doSomething($prnt, 772123123123123);

echo anton . "\n";
echo ANTON . "\n";


class Object
{
  function __construct()
  {
  }
  public $v;
}


$date = date("d m y");
$time = date("h:i:s");

print "$date . '\n' . $time";

$path = "/bin/usr"; $home = "/Users/user";

$fullPath = $path.$home;
echo $fullPath . "\n";

echo PHP_INT_MAX . "\n";

echo gettype(123) . "\n";

$array = array('pik' => 1, 'puk' => 2 );
$list = [
  1 => [1 => 1, 2, 33 => 3, 4],
  ["a", "b"]
];
print_r($array);
print_r($list);

var_dump($array);
var_dump($list);

var_export($array);
var_export($list);
*/
/*
$empty = null;

#echo $barmaley;

$obj = new Object();

function change(&$o, $v) {
  $n = new Object();
  $n->v = $v;
  //$o->v = $v;
  $o = $n;
}

function changeArray(&$ar) {
  $ar[0] = "_";
}
$t = [1,2,3];
changeArray($t);
print_r($t);

change($obj, "new value");
echo "<br>$obj->v<br>";

function randgen() {
  for ($i=0; $i < 4; $i++) {
    yield mt_rand(0, 3);
  }
}

function mygenerator() {
  yield from randgen();
  yield from randgen();
  yield from randgen();
}

foreach (mygenerator() as $item) {
  print "$item\n";
}
*/
/*
$i = 2;

print is_numeric("3.14");
print(settype($date, 'string'));
echo $date . "\n";

$x = 1;
$y =& $x;
$xname = 'x';
$y = 777;
echo $$xname;

echo gettype(2*2);

echo <<<'MARKER'
bla boolval
bla blabla

MARKER;

$ls = `ls -la`;
echo $ls;

$lst = explode(",", "1,2,3,4");

foreach($lst as $item) echo "$item \n";

$req = $_REQUEST["foo"] ?? "empty";
echo $req;
"<br>";
$test_mas = [];
$test_mas[] = "12";
$test_mas[] = "21";
$test_mas['duck'] = "mcDac";
unset($test_mas[0]);
var_export($test_mas);
*/

$str = "привет!";
echo mb_strlen($str) . "\n";
echo strlen($str) . "\n";


?>

</pre>
