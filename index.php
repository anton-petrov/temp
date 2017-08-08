<pre>
<?php

require_once 'friend.php';


$m = [
  "anton" => [33, "21-10-1984"],
  "olga" => [25, "21-10-1992"],
];

foreach ($m as $key => &$value) {
  echo "user: $key; info: $value[0], $value[1];<br>";
  $value[0] += 1;
}

for (reset($m); list($k, $v) = each($m); ) {
  echo "user: $k; info: $v[0], $v[1];<br>";
}

$str = '1|2|3|4|5|6';
print_r($list = explode('|', $str));

print_r(implode(",", $list));

$ser = serialize($m);
echo "<br>$ser<br>";
$m = unserialize($ser);
var_export($m);
/*
echo 'Index page.' . '<br>';
$a = $_REQUEST['a'] ?? '';
if ($a == '1') {
  print("a=1");
} else if ($a == '2') {
  print("a=2");
} else {
  print("a=?");
}

echo '<br>';
$names[0] = "joe";
$names[11] = 'andrew';

$data = ["user", 198, "some data"];

[$name, $id, $info] = $data;

echo "$name $id $info <br>";

for ($i=0; $i < count($data); $i++) {
  echo "[ $data[$i] ] ";
}


print_r($names);
*/
?>
</pre>
